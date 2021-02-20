<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
          
        function get_data() { 
            $datae = array(); 
            $datae[] = array( 
                'Name' => $_POST['name'], 
                'Branch' => $_POST['branch'], 
                'College' => $_POST['college'], 
            ); 
            return json_encode($datae); 
        } 
          
        $name = "gfg"; 
        $file_name = $name . '.json'; 
       
        if(file_put_contents( 
            "$file_name", get_data())) { 
                echo $file_name .' file created'; 
            } 
        else { 
            echo 'There is some error'; 
        } 
    } 
?> 


<!--?php 
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		
		function get_data() { 
			$datae = array(); 
			$datae[] = array( 
				'number 1' => $_POST['Number-1'],
                'number 2' => $_POST['Number-2'],
                'number 3' => $_POST['Number-3'],
                'number 4' => $_POST['Number-4'],
                'number 5' => $_POST['Number-5'],
                'data 1' => $_POST['data-1'],
                'data 2' => $_POST['data-2'], 
			); 
			return json_encode($datae); 
		} 
		
		$name = "form"; 
		$file_name = $name . '.json'; 
	
		if(file_put_contents( 
			"$file_name", get_data())) { 
				echo $file_name .' file created'; 
			} 
		else { 
			echo 'There is some error'; 
		} 
	} 
?> 
