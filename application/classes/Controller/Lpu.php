<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Lpu extends Controller_Tmp
{

    public function action_index()
    {
        $this->redirect('/lpu/ipra');
    }

    public function action_ipra()
    {
        $id = $this->request->param('id');
        if(empty($id)) {
            $page = View::factory('lpu/ipra');
        }else{
            $page = View::factory('lpu/ipra_edit');
            $page->id = $id;
            $page->typeid = Model_Ipra::GetPersonsIpraTypeId($id);

        }
        $page->toolbar_cfg = View::factory('lpu/toolbar');
        $this->page = $page;
    }

    public function action_outgoing()
    {
        $page = View::factory('lpu/outgoing');
        $page->toolbar_cfg = View::factory('lpu/toolbar');
        $medorg = Model_Catalog::GetOneMedOrg($this->user['med_org_id']);
        if(!empty($medorg['name'])) $page->medorg_name = trim($medorg['name']);
         else $page->medorg_name = '(не определено)';
        $this->page = $page;
    }

    public function action_ipraunassoc()
    {
        $page = View::factory('lpu/unassoc');

        $this->page = $page;
    }

    public function action_outgoingedit()
    {
        $page = View::factory('lpu/outgoing_edit');
        $page->item = Model_Ipra::GetOnePerson($this->request->query('id'),true);
        $medorg = Model_Catalog::GetMedOrg(true);$new = array();
        foreach($medorg as $one){
            $new[$one['dicid']] = $one['name'];
        }
        $medorg = $new;unset($new);
        $page->medorg = $medorg;
        $this->page = $page;
    }


    public function action_journal()
    {
        $page = View::factory('stat/journal/index');
        $menu = Model_Ipra::GetReadyIpraMedOrgCountedUnApproved();
        foreach($menu as $key=>$one)
            if(empty($one['recid'])) unset($menu[$key]);
        $page->current_lpu_only = true;
        $page->med_org = $menu;
        $page->toolbar_cfg = View::factory('lpu/toolbar');
        $this->page = $page;
    }

}
