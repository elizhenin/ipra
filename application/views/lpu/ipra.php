<div style="width: 100%; height: 100vh;">
    <div id="main" style="width: 100%; height: 100%;"></div>
</div>
<?= $toolbar_cfg ?>
<script type="text/javascript">
    var config = {
        layout: {
            name: 'layout',
            padding: 0,
            margin: 10,
            panels: [
                {type: 'top', size: '34', resizable: false},
                {type: 'main', minSize: 300},
                {type: 'right', size: '50%', minSize: 300}
            ]
        },
        card_layout: {
            name: 'card_layout',
            padding: 0,
            margin: 10,
            panels: [
                {type: 'top', size: '391px', minSize: 300},
                {type: 'main', minSize: 300}
            ]
        },

        person_list: {
            name: 'person_list',
            url: '/ajax/lpupersonlist',
            limit: 200,
            method: 'GET', // need this to avoid 412 error on Safari
            header: 'Список пациентов',
            show: {
                header: true,
                toolbar: true,
                footer: true
            },
            toolbar: {
                items: [
                    {type: 'spacer'},
                    {type: 'button', id: 'csv', caption: 'Выгрузить в CSV', img: 'icon-folder'},
                    {type: 'button', id: 'unassoc', caption: 'Несопоставленные', img: 'icon-page'}
                ],
                onClick: function(event){
                    if (event.target == 'unassoc') {
                        w2popup.open({
                            title: 'Список несопоставленных',
                            body: '<iframe src="/lpu/ipraunassoc" scrolling="no" style="overflow:hidden;width: 100%;height: 100%;padding:0px;margin:0px"></iframe>',
                            width: 1200,     // width in px
                            height: 600     // height in px

                        });
                    }
                    if (event.target == 'csv') {
                        var csv = 'Дата выдачи ИПРА;Фамилия;Иия;Отчество;Дата рождения;№ ИПРА;СНИЛС;' + "\n";
                        for (i = 1; i <= w2ui.person_list.records.length; i++) {
                            csv = csv + w2ui.person_list.records[i - 1].prgdt + ';';
                            csv = csv + w2ui.person_list.records[i - 1].lname.trim() + ';';
                            csv = csv + w2ui.person_list.records[i - 1].fname.trim() + ';';
                            csv = csv + w2ui.person_list.records[i - 1].sname.trim() + ';';
			    csv = csv + w2ui.person_list.records[i - 1].bdate + ';';
                            csv = csv + w2ui.person_list.records[i - 1].prgnum + ';';
                            csv = csv + w2ui.person_list.records[i - 1].snils.trim() + ';';
                            csv = csv + "\n";
                        }
                        csv = $('<div/>').html(csv).text();
                        saveTextAs('\ufeff' + csv, "ИПРА <?=(!empty($medorg_name))?$medorg_name:''?>.csv");
                    }
                }
            },
            columns: [
                {field: 'prgdt', caption: 'Дата выдачи ИПРА', size: '16%', sortable: true},
                {field: 'lname', caption: 'Фамилия', size: '16%', sortable: true},
                {field: 'fname', caption: 'Имя', size: '16%', sortable: true},
                {field: 'sname', caption: 'Отчество', size: '16%', sortable: true},
                {field: 'prgnum', caption: 'Номер ИПРА', size: '16%', sortable: true},
                {field: 'snils', caption: 'СНИЛС', size: '16%', sortable: true}
            ],

            onClick: function (event) {

                w2ui['person_detail'].clear();
                var record = this.get(event.recid);
                w2ui['person_detail'].add([
                    {recid: 0, name: 'Округ:', value: record.okrug},
                    {recid: 1, name: 'Регион:', value: record.region},
                    {recid: 2, name: 'Дата актуальности:', value: record.dt},
                    {recid: 3, name: 'СНИЛС:', value: record.snils},
                    {recid: 4, name: 'Фамилия:', value: record.lname},
                    {recid: 5, name: 'Имя:', value: record.fname},
                    {recid: 6, name: 'Отчество:', value: record.sname},
                    {recid: 7, name: 'Дата рождения:', value: record.bdate},
                    {recid: 8, name: 'Пол:', value: record.gndr},
                    {recid: 9, name: 'Номер протокола:', value: record.docnum},
                    {recid: 10, name: 'Дата проведения МСЭ:', value: record.docdt},
                    {recid: 11, name: 'Программа:', value: record.prg},
                    {recid: 12, name: 'Номер карты ИПРА:', value: record.prgnum},
                    {recid: 13, name: 'Дата выдачи ИПРА:', value: record.prgdt},
                    {recid: 14, name: 'Прикрепление МО:', value: record.medorg}
                ]);
                w2ui['ipra_list'].clear();
                w2ui['ipra_list'].add(record.ipra_list);

            }
        },
        person_detail: {
            header: 'Детали',
            show: {header: true, columnHeaders: false},
            name: 'person_detail',
            columns: [
                {
                    field: 'name',
                    caption: 'Name',
                    size: '150px',
                    style: 'background-color: #efefef; border-bottom: 1px solid white; padding-right: 0px;',
                    attr: "align=right"
                },
                {field: 'value', caption: 'Value', size: '100%', editable: {type: 'text'}}
            ],
            onClick: function (event) {

            }
        },
        ipra_list: {
            name: 'ipra_list',
            limit: 50,
            header: 'Программа',
            show: {
                header: true,
                toolbar: true,
                toolbarEdit: true,
                toolbarReload: false,   // indicates if toolbar reload button is visible
                toolbarColumns: false,   // indicates if toolbar columns button is visible
                toolbarSearch: false,   // indicates if toolbar search controls are visible
                footer: true
            },
            columns: [
                {field: 'type', caption: 'Тип', size: '16%', sortable: false},
                {field: 'event', caption: 'Подтип', size: '16%', sortable: false},
                {field: 'date', caption: 'Дата', size: '16%', sortable: false},
                {field: 'result', caption: 'Результат', size: '16%', sortable: false},
            ],

            onEdit: function (event) {
                var record = this.get(event.recid);
                window.location.href = "/lpu/ipra/"+record.recid;
            }
        }
    };
    $('#main').w2layout(config.layout);
    w2ui.layout.content('top', $().w2toolbar(toolbar_cfg));
    w2ui.layout.content('main', $().w2grid(config.person_list));
    w2ui.layout.content('right', $().w2layout(config.card_layout));
    w2ui.card_layout.content('top', $().w2grid(config.person_detail));
    w2ui.card_layout.content('main', $().w2grid(config.ipra_list));

</script>
