<?php
/**
 * 仅限WEB接口调用的内容块
 * @author phpok.com <admin@phpok.com>
 * @version 5.0.0
 * @date 2016年02月05日
 */
if(!defined("PHPOK_SET")){
	exit("<h1>Access Denied</h1>");
}
class list_model extends list_model_base
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_hits($id)
	{
		$sql = "SELECT hits FROM ".$this->db->prefix."list WHERE id='".$id."'";
		$rs = $this->db->get_one($sql);
		return $rs['hits'];
	}
}