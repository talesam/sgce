<?php class FckHelper extends Helper {

    var $helpers = Array('Html');

    function load($id, $toolbar = 'Default') {
        $did = '';
        foreach (explode('.', $id) as $v) {
             $did .= ucfirst($v);
        }

        $basePath = '/js/';
        $basePath = $this->Html->url($basePath);

        return <<<FCK_CODE
<script type="text/javascript">
fckLoader_{$did} = function () {
    var bFCKeditor_{$did} = new FCKeditor('{$did}');
    bFCKeditor_{$did}.BasePath = '{$basePath}';
    bFCKeditor_{$did}.ToolbarSet = '{$toolbar}';
    bFCKeditor_{$did}.ReplaceTextarea();
}
fckLoader_{$did}();
</script>
FCK_CODE;
    }

}
?>