<?php
    class Form{ 

        public function input($name, $type, $id, $placeholder){
            /* return '<div>
            <label for="'.$id.'">'.$name.'</label>
            <input id="'.$id.'" class="input" type="'.$type.'" placeholder="'.$placeholder.'" name = '.$name.'></div>'; */
             return '<div class="all">
             <ul>

             <h2>Add New Task </h2><hr>
            

             <li>
                 <label for="title">'.$name.'</label>
                 <input class="title" type="'.$type.'">
             </li>
            
             </ul>
             </div>';

        
        }
        public function textarea($name){
           return '<div class="description">
                 <label for="description">'.$name.' </label>
                 <textarea class="text" rows="10"></textarea>
             </div>';
        }


        public function submit($name){

           /*  return '<button class="btn"type="submit">'.$name.'</button>'; */
            return  '<div>
            <button class="btn" type="submit" name="VAlider">Ajouter Une Tache</button>
            </div>' ;            
        }
    }
?> 
