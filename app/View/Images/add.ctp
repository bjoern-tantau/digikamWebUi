<div class="images form">
<?php echo $this->Form->create('Image', array('enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add Image'); ?></legend>
	<?php
		echo $this->Form->input('album');
		echo $this->Form->input('upload', array('label'=>'fichier', 'type'=>'file'));
	?>
	
		<label>Tag</label>
	<select name="data[ImageTag][tag_id]">
		<?php echo $this->element('Tag/tagSelect',array('tagsTree'=>$this->Session->read('Cache.tagsTree')))?></div>
	</select>
	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Albums'), array('controller' => 'albums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album'), array('controller' => 'albums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Image Haar Matrices'), array('controller' => 'image_haar_matrices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image Haar Matrix'), array('controller' => 'image_haar_matrices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Image Positions'), array('controller' => 'image_positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image Position'), array('controller' => 'image_positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Image Comments'), array('controller' => 'image_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image Comment'), array('controller' => 'image_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Image Copyrights'), array('controller' => 'image_copyrights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image Copyright'), array('controller' => 'image_copyrights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Image Informations'), array('controller' => 'image_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image Information'), array('controller' => 'image_informations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Image Properties'), array('controller' => 'image_properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image Property'), array('controller' => 'image_properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
