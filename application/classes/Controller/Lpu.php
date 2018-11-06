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
            $session = Session::instance();
            $search = $session->get('search_string',false);
            if(!empty($search)) $search = json_decode($search,true);
            $page->search = $search;
            $sort = $session->get('sort_string',false);
            $page->$sort = $sort;
        }else{
            $page = View::factory('lpu/ipra_edit');
            $page->id = $id;
            $page->typeid = Model_Ipra::GetPersonsIpraTypeId($id);

        }
        $page->toolbar_cfg = View::factory('lpu/toolbar');
        $this->page = $page;
    }

    public function action_hot()
    {
        $page = View::factory('stat/hot/index');
        $menu = Model_Catalog::GetMedOrg(true);
        $page->current_lpu_only = true;
        $page->med_org = $menu;
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


    public function action_unapproved()
    {
        $page = View::factory('stat/unapproved/index');
        $menu = Model_Ipra::GetReadyIpraMedOrgCountedUnApproved();
        if(!empty($menu))foreach($menu as $key=>$one)
            if(empty($one['recid'])) unset($menu[$key]);
        $page->current_lpu_only = true;
        $page->med_org = $menu;
        $page->toolbar_cfg = View::factory('lpu/toolbar');
        $this->page = $page;
    }
    public function action_approved()
    {
        $page = View::factory('stat/approved/index');
        $menu = Model_Ipra::GetReadyIpraMedOrgCountedApproved();
        if(!empty($menu))
        foreach($menu as $key=>$one)
            if(empty($one['recid'])) unset($menu[$key]);
        $page->current_lpu_only = true;
        $page->med_org = $menu;
        $page->toolbar_cfg = View::factory('lpu/toolbar');
        $this->page = $page;
    }

    public function action_medorgcount()
    {
        $from = $this->request->query('from');
        $to = $this->request->query('to');
        $page = View::factory('stat/medorgcount/index');
        $page->from = $from;
        $page->to = $to;
        $page->med_org = Model_Catalog::GetMedOrg();
        $page->toolbar_cfg = View::factory('lpu/toolbar');
        $this->page = $page;
    }
}
