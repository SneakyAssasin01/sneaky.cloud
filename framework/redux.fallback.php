<?php
/**
 * fallback redux class
 */
if(!class_exists('Redux') && !class_exists('ReduxFramework')){
    global $computer_repair_opt;
    class Redux{
        public static $hasOptions = false;
        public static function setArgs($option, $args){
            $options = get_option($option, false);
            if(!empty($options)){
                self::$hasOptions = true;
            }
        }
        public static function setSection($option, $args){
            if(isset($args['fields']) && !empty($args['fields']) && !self::$hasOptions){
                foreach($args['fields'] as $field){
                    if(isset($field['default']) && isset($field['id'])){
                        $id = $field['id'];
                        $updateArr = get_option($option, array());
                        if(is_array($field['default'])){
                            foreach($field['default'] as $key=>$val){
                                $updateArr[$id][$key] = $val;
                            }
                            update_option($option, $updateArr);
                        }else{
                            $updateArr[$id] = $field['default'];
                            update_option($option, $updateArr);
                        }
                    }
                }
            }
        }
    }
    function computer_repair_redux_fallback_init_var(){
        global $computer_repair_opt;
        if(!is_admin() && !isset($computer_repair_opt)){
            $computer_repair_opt = get_option('computer_repair_opt');
            foreach ($computer_repair_opt as $yskey => $ysvalue){
                if($ysvalue == 'on'){
                    $computer_repair_opt[$yskey] = true;
                }elseif($ysvalue == 'off'){
                    $computer_repair_opt[$yskey] = false;
                }
            }
        }
    }
    add_action('init', 'computer_repair_redux_fallback_init_var', 1);
}