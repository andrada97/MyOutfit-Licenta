<?php

     $temp = 25.0;

    if(isset($_POST['submit'])){

        $gen = $activity = '';
        $gen = $_POST['gen'];
        $activity = $_POST['activity'];

        
        switch($gen){
            case 'female':
                switch($activity){
                    case 'park':
                        if($temp >=23.0){
                            header("Location: ../templates/outfits/summer/out-f-park.php?getOutfit");
                            exit();
                            }   
                        else {
                            if($temp<23.0 && $temp>=17.0){
                                header("Location: ../templates/outfits/spring/out-f-park.php?getOutfit");
                                exit();
                            }
                            else{
                                if($temp<10.0){
                                    header("Location: ../templates/outfits/winter/out-f-park.php?getOutfit");
                                    exit();
                                }
                                else{
                                    header("Location: ../templates/outfits/autumn/out-f-park.php?getOutfit");
                                    exit();
                                }
                            }
                        }
                        break;

                    case 'dinner':
                        if($temp >=23.0){
                            header("Location: ../templates/outfits/summer/out-f-dinner.php?getOutfit");
                            exit();
                            }   
                        else {
                            if($temp<23.0 && $temp>=17.0){
                                header("Location: ../templates/outfits/spring/out-f-dinner.php?getOutfit");
                                exit();
                            }
                            else{
                                if($temp<10.0){
                                    header("Location: ../templates/outfits/winter/out-f-dinner.php?getOutfit");
                                    exit();
                                }
                                else{
                                    header("Location: ../templates/outfits/autumn/out-f-dinner.php?getOutfit");
                                    exit();
                                }
                            }
                        }
                        break;

                    case 'sport':
                        if($temp >=23.0){
                            header("Location: ../templates/outfits/summer/out-f-sport.php?getOutfit");
                            exit();
                            }   
                        else {
                            if($temp<23.0 && $temp>=17.0){
                                header("Location: ../templates/outfits/spring/out-f-sport.php?getOutfit");
                                exit();
                            }
                            else{
                                if($temp<10.0){
                                    header("Location: ../templates/outfits/winter/out-f-sport.php?getOutfit");
                                    exit();
                                }
                                else{
                                    header("Location: ../templates/outfits/autumn/out-f-sport.php?getOutfit");
                                    exit();
                                }
                            }
                        }
                        break;

                    case 'festival':
                        if($temp >=23.0){
                            header("Location: ../templates/outfits/summer/out-f-fest.php?getOutfit");
                            exit();
                            }   
                        else {
                            if($temp<23.0 && $temp>=17.0){
                                header("Location: ../templates/outfits/spring/out-f-fest.php?getOutfit");
                                exit();
                            }
                            else{
                                if($temp<10.0){
                                    header("Location: ../templates/outfits/winter/out-f-fest.php?getOutfit");
                                    exit();
                                }
                                else{
                                    header("Location: ../templates/outfits/autumn/out-f-fest.php?getOutfit");
                                    exit();
                                }
                            }
                        }
                        break;

                    case 'school':
                        if($temp >=23.0){
                            header("Location: ../templates/outfits/summer/out-f-school.php?getOutfit");
                            exit();
                            }   
                        else {
                            if($temp<23.0 && $temp>=17.0){
                                header("Location: ../templates/outfits/spring/out-f-school.php?getOutfit");
                                exit();
                            }
                            else{
                                if($temp<10.0){
                                    header("Location: ../templates/outfits/winter/out-f-school.php?getOutfit");
                                    exit();
                                }
                                else{
                                    header("Location: ../templates/outfits/autumn/out-f-school.php?getOutfit");
                                    exit();
                                }
                            }
                        }
                        break;
                }


            case 'male':
            switch($activity){
                case 'park':
                    if($temp >=23.0){
                        header("Location: ../templates/outfits/summer/out-m-park.php?getOutfit");
                        exit();
                        }   
                    else {
                        if($temp<23.0 && $temp>=17.0){
                            header("Location: ../templates/outfits/spring/out-m-park.php?getOutfit");
                            exit();
                        }
                        else{
                            if($temp<10.0){
                                header("Location: ../templates/outfits/winter/out-m-park.php?getOutfit");
                                exit();
                            }
                            else{
                                header("Location: ../templates/outfits/autumn/out-m-park.php?getOutfit");
                                exit();
                            }
                        }
                    }
                    break;

                case 'dinner':
                    if($temp >=23.0){
                        header("Location: ../templates/outfits/summer/out-m-dinner.php?getOutfit");
                        exit();
                        }   
                    else {
                        if($temp<23.0 && $temp>=17.0){
                            header("Location: ../templates/outfits/spring/out-m-dinner.php?getOutfit");
                            exit();
                        }
                        else{
                            if($temp<10.0){
                                header("Location: ../templates/outfits/winter/out-m-dinner.php?getOutfit");
                                exit();
                            }
                            else{
                                header("Location: ../templates/outfits/autumn/out-m-dinner.php?getOutfit");
                                exit();
                            }
                        }
                    }
                    break;

                case 'sport':
                    if($temp >=23.0){
                        header("Location: ../templates/outfits/summer/out-m-sport.php?getOutfit");
                        exit();
                        }   
                    else {
                        if($temp<23.0 && $temp>=17.0){
                            header("Location: ../templates/outfits/spring/out-m-sport.php?getOutfit");
                            exit();
                        }
                        else{
                            if($temp<10.0){
                                header("Location: ../templates/outfits/winter/out-m-sport.php?getOutfit");
                                exit();
                            }
                            else{
                                header("Location: ../templates/outfits/autumn/out-m-sport.php?getOutfit");
                                exit();
                            }
                        }
                    }
                    break;

                case 'festival':
                    if($temp >=23.0){
                        header("Location: ../templates/outfits/summer/out-m-fest.php?getOutfit");
                        exit();
                        }   
                    else {
                        if($temp<23.0 && $temp>=17.0){
                            header("Location: ../templates/outfits/spring/out-m-fest.php?getOutfit");
                            exit();
                        }
                        else{
                            if($temp<10.0){
                                header("Location: ../templates/outfits/winter/out-m-fest.php?getOutfit");
                                exit();
                            }
                            else{
                                header("Location: ../templates/outfits/autumn/out-m-fest.php?getOutfit");
                                exit();
                            }
                        }
                    }
                    break;

                case 'school':
                    if($temp >=23.0){
                        header("Location: ../templates/outfits/summer/out-m-school.php?getOutfit");
                        exit();
                        }   
                    else {
                        if($temp<23.0 && $temp>=17.0){
                            header("Location: ../templates/outfits/spring/out-m-school.php?getOutfit");
                            exit();
                        }
                        else{
                            if($temp<10.0){
                                header("Location: ../templates/outfits/winter/out-m-school.php?getOutfit");
                                exit();
                            }
                            else{
                                header("Location: ../templates/outfits/autumn/out-m-school.php?getOutfit");
                                exit();
                            }
                        }
                    }
                    break;
            }
            }
    

    if(($gen!='female' || $gen!='male') || $activity='Select activity') {
        header("Location: ../templates/emptyFilter.php");
        exit();
    }

    }
    
