<?php
$prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Video play</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'video-url' ?>">Video URL</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'video-url' ?>" placeholder="Enter URL video (allow video youtube and vimeo).">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'video-width' ?>">Video Width</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'video-width' ?>" placeholder="Enter Width video (exp: 640).">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'video-height' ?>">Video Height</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'video-height' ?>" placeholder="Enter Height video (exp: 480).">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'video-shortcode-content'; ?>">Shortcode Content</label>
        <textarea placeholder="Shortcode Content" rows="3" class="form-control" id="<?php echo $prefix.'video-shortcode-content'; ?>"></textarea>
    </div>
    <div class="form-insert">
        <button type="button" id="<?php echo $prefix.'insert-video'; ?>" class="btn btn-primary button-insert-shortcode">Insert Shortcode</button>
    </div>
</form>