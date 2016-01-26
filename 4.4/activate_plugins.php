
// get already activated plugins
$plugins = FALSE;
$plugins = get_option('active_plugins');
if($plugins){
    $puginsToActiv = array('wp-acceleration-for-china/wp-acceleration-for-china.php', 'aliyun-oss-support-master/oss-support.php');
    foreach ($puginsTostActiv as $plugin){
        if (!in_array($plugin, $plugins)) {
             array_push($plugins,$plugin);
             update_option('active_plugins',$plugins);
        }
    }
}
