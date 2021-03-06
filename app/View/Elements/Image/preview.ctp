<?php
 //debug($image);

if( ! isset($image['Image']) )
{
  $data = $image;
}
else
{
  $data = $image['Image'];
  
}
  $imageTag = false;
  if( isset($data['ImageTag']))
   {
      $imageTag = $data['ImageTag'];
   }
   else
   {
      if( isset($image['ImageTag']))
      {
         $imageTag = $image['ImageTag'];
      }
   }

   $preview = 'small';
   
if( isset($size) && $size == 'max' )   
   {
   $preview = 'big';
   }
   
//  if( isset($image['ImageTag']))
//  {
//     $imageTag = $image['ImageTag'];
//  }
//  else
//  {
//   if(isset($image['Image']['ImageTag']))
//   {
//         $imageTag = $image['Image']['ImageTag'];
//   }

//  }

   $rating = false;
   if(isset($data['ImageInformation']))
   {
     $rating = $data['ImageInformation']['rating'];
   }
   else
   {
     if(isset($image['ImageInformation']))
     {
       $rating = $image['ImageInformation']['rating'];
     }
   }
   
   $album = false;
   
   if(isset($data['Album']))
   {
     $album = $data['Album'];
   }
     else
     {
       if(isset($image['Album']))
       {
         $album = $image['Album'];
       }
     }
   //debug($album);
   
   
// if(isset($image['ImageInformation']))
// {
//   $rating = $image['ImageInformation']['rating'];
  
// }

  ?>

<div id="previewContainer_<?php echo $data['id']?>" class="imagePreviewContainer droppableImageTag thumbnail">
  <div class="imagePreviewFrame">
    <a id="imageLink_<?php echo $data['id']?>" href="<?php echo $this->webroot.'images/download/'.$data['id'].'/' ?>" title="<?php echo $data['name'] ?>"  rel="album" class="fancybox" >
    <img id="imagePreview_<?php echo $data['id']?>" class="imagePreview preview_<?php echo $preview ?>" src="<?php echo $this->webroot.'images/download/'.$data['id'].'/'.$preview ?>" alt="<?php echo $data['name'] ?>" />
    </a>
    <?php if( AuthComponent::user('id') == Configure::read('Digikam.rootUser') ): ?>
	<ul>
		<li>
			<a href="<?php echo $this->webroot.'images/edit/'.$data['id'] ?>" >Edit</a>
		</li>
		<li>
			<?php echo $this->Form->postLink(__('Delete'), array('controller'=>'images', 'action' => 'delete', $data['id']), null, __('Are you sure you want to delete # %s?', $data['id'])); ?>
		</li>
		<li>
			<?php echo $this->Form->postLink(__('rotate left'), array('controller'=>'images', 'action' => 'rotate', $data['id'], 270), null, __('Are you sure you want to rotate left # %s?', $data['id'])); ?>
		</li>
		<li>
			<?php echo $this->Form->postLink(__('rotate right'), array('controller'=>'images', 'action' => 'rotate', $data['id'], 90), null, __('Are you sure you want to rotate right # %s?', $data['id'])); ?>
		</li>
	<ul>
    <?php endif; ?>
  </div>
  <?php 
  if($rating)
  {
    ?>
    <div id="rate_container_<?php echo $data['id']?>" class="imageRateContainer">
    <form>
    <?php 
    for($i=1; $i<=5; $i++)
    {
      $checked = '';
      if($rating == $i)
      {
        $checked = 'checked="checked"';
      }
      echo '<input type="radio" rel="'.$data['id'].'" class="imageRate" '.$checked.' value="'.$i.'"/>'; 
    }
    ?>
    </form>
    </div>
    <?php 
  }
  ?>
  <div>&nbsp;</div>
      <div class="tags" >
      <ul id="tagsPhoto_<?php echo $data['id'] ?>">
     <?php

     if( $imageTag != false)
     {
        foreach($imageTag as $tag)
        {
         echo $this->element('Tag/tagPhoto', array('tag'=>$tag));
        }
     }
     ?>
      </ul>
    </div>
  <div class="imagePreviewInfo">
    <h4>
    <a href="<?php echo $this->webroot.'images/view/'.$data['id'] ?>" title="" ><?php echo $data['name']?></a>
    </h4>
    <a href="<?php echo $this->webroot.'albums/view/'.$data['album'] ?>" title="" ><?php echo $album['relativePath']?></a>
  </div>
</div>