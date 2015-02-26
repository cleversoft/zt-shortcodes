<?php
/**
 * ZT Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 *
 * @version     1.0.0
 * @author      ZooTemplate
 * @email       support@zootemplate.com
 * @link        http://www.zootemplate.com
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2
 */
$prefix = 'zt-sc-';
?>

<div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_tabs" data-root="true">
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'tabs-type'; ?>">Type</label>
        <select id="<?php echo $prefix . 'tabs-type'; ?>" class="form-control sc-selectbox" data-property="tabType">
            <option value="horizontal">Horizontal</option>
            <option value="vertical-left">Vertical Left</option>
            <option value="vertical-right">Vertical Right</option>
            <option value="bottom-tabs">Horizontal Bottom</option>
        </select>
    </div>
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_tab" class="container-child">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'tab-title' ?>">Title</label>
            <input type="text" class="form-control sc-textbox" data-property="title"
                   id="<?php echo $prefix . 'tab-title' ?>"
                   placeholder="Enter title">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'tab-content'; ?>">Content Tab</label>
            <textarea placeholder="Content Tabs" rows="3" class="form-control sc-textbox" data-property=""
                      id="<?php echo $prefix . 'tab-content'; ?>" data-default="This is tab content">This is tab content</textarea>
        </div>
        <div class="checkbox form-group clearfix">
            <label>
                <input type="checkbox" class="sc-checkbox" data-property="active"
                       id="<?php echo $prefix . 'tab-active'; ?>"> Active
            </label>
        </div>
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'clone-element' ?>">Add New Tab</button>
</div>

