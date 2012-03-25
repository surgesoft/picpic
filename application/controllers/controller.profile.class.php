<?php

	require_once("controller.base.class.php");
	class profile extends ControllerBase
	{
		public function  __construct()
		{
			parent::__construct();
		}
		
		public function _updatesex($Sex)
		{
			$this->model->Set_Sex_By_UserId($_SESSION["USERID"],$Sex);
		}
		public function _updateblood($Blood)
		{
			$Profile->model->Set_Blood_By_UserId($_SESSION["USERID"],$Blood);
		}
		public function _updatebirthday($Birthday,$Birthmonth,$Birthyear)
		{
			$birthday=$Birthyear.'/'.$Birthmonth.'/'.$Birthday;
			$Profile->model->Set_Birthday_By_UserId($_SESSION["USERID"],$birthday);
		}
        public function getdesc($id)
        {
            $this->model->Get_Desc_By_UserId($id);
            foreach($this->model->getresult() as $re)
            {
                return $re->Desc;
            }
        }
		public function _getprofile()
		{
			$this->model->Get_By_UserId($_SESSION["USERID"]);
			$re1=$this->model->getresult();
			foreach($re1 as $r1)
			{
                return $r1;
			}
		}
		public function _uploadavatar()
		{
			require_once(APPLICATION_PATH."/lib/avataruploader.php");
			$inputName = 'uploadfile'; 
			// 即<input type=“file" name="uploadfile" /> 中的name值，不填也行 
			$upload = new upload($inputName); 
			$new_dir = INDEX_PATH.'/avatar/'; // 将文件移动到的路径 
			$upload->moveTo($new_dir); 
			echo "<img src='/avatar/".$_SESSION["USERID"].".jpg' />";
		}
				
	}	
?>
