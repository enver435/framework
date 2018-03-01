<?php
	
	# @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-07-31 15:02:45
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-02 23:03:37

	Class Autoloader 
	{

		static public function AutoloaderModels($db)
		{
			$modelDirectory      = glob(ROOT . '/app/models/model.*.php');
            $modelAdminDirectory = glob(ROOT . '/app/models/admin/model.*.php');

            $objectArraySite      = array();
            $objectArraySiteAdmin = array();

            /* LOAD SITE MODELS */
            foreach ($modelDirectory as $model) 
            {
                $modelName          = explode('.', explode('models/', $model)[1])[1];
                $modelName          = ucfirst($modelName);
                $modelNameBackSlash = 'Model\\' . $modelName;
                $modelFileName      = explode('models/', $model)[1];

                require_once ROOT . '/app/models/' . $modelFileName;

                $$modelName = new $modelNameBackSlash($db);
                $objectArraySite[$modelName] = $$modelName;
            }

            /* LOAD SITE ADMIN MODELS */
            foreach ($modelAdminDirectory as $model) 
            {
                $modelName          = explode('.', explode('models/', $model)[1])[1];
                $modelName          = ucfirst($modelName);
                $modelNameBackSlash = 'ModelAdmin\\' . $modelName;
                $modelFileName      = explode('models/', $model)[1];

                require_once ROOT . '/app/models/' . $modelFileName;

                $$modelName = new $modelNameBackSlash($db);
                $objectArraySiteAdmin['Admin' . $modelName] = $$modelName;
            }

            return array(
            	'objectArraySite'      => $objectArraySite,
            	'objectArraySiteAdmin' => $objectArraySiteAdmin
            );
		}

		static public function AutoloaderHelper()
		{
			$helperDir = ROOT . '/system/helper';
		    if($dh = opendir($helperDir))
		    {
		      	while($file = readdir($dh)) 
		      	{
		        	if(is_file($helperDir . '/' . $file))
		        	{
		          		require_once $helperDir . '/' . $file;
		        	}
		      	}
		    }
		}

	}

?>
