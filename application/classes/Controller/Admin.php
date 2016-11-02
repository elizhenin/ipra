<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Tmp
{


    public function action_index()
    {
                if ($this->request->method() == Request::POST) {
            $csv = file_get_contents($_FILES['prg0']['tmp_name']);
            if(!empty($csv)){
                $by_line = explode("\n",$csv);
                if(!empty($by_line)){
                    $header = explode("\t", $by_line[0]);
                    foreach ($header as $key => $value) {
                        $keys[] = $value;
                    }
                    unset($by_line[0]);

                    foreach($by_line as $row){
                        if(!empty($row)) {
                            $columns = explode("\t", $row);
                            $data = array();
                            for($i=0;$i<count($keys);$i++){
                                if($columns[$i] == '\N') $columns[$i] = null;
                                $data[$keys[$i]] = $columns[$i];
                            }
                            DB::insert('prg0',array_keys($data))
                            ->values($data)
                            ->execute();
                            }

                        }
                    }
                }
            }
        

        $page = View::factory('admin/index');
        $page->toolbar_cfg = View::factory('admin/toolbar');
        $medorg = Model_Catalog::GetMedOrg(true);$new = array();
        foreach($medorg as $one){
            $new[$one['dicid']] = $one['name'];
        }
        $medorg = $new;unset($new);
        $page->medorg = $medorg;
        $this->page = $page;
    }

    public function action_useredit()
    {
        $page = View::factory('admin/user_edit');
        $page->user = Model_Users::GetUser($this->request->query('id'));
        $this->page = $page;
    }

    public function action_medorgedit()
    {
        $page = View::factory('stat/medorg/index');
        $page->toolbar_cfg = View::factory('admin/toolbar');
        $this->page = $page;
    }


}
