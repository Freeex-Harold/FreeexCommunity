<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

$isOpen = 'open';
$arrow = 'chevron-left';
$text = 'style';

if ($this->session->has_userdata('is_open')) {
  $isOpen = $this->session->userdata('is_open') == 1 ? 'open' : 'close';
  $arrow = $this->session->userdata('is_open') == 1 ? 'chevron-left' : 'chevron-right';
  $text = $this->session->userdata('is_open') == 1 ? 'style' : 'style="display: none;"';
}
?>
<div class="uk-width-1-6 aside <?=$isOpen?>">
  <ul class="uk-nav-primary uk-nav-parent-icon" uk-nav>
    <li class="<?=$cur === 1 ? 'uk-active' : ''?>">
      <a href="/admin/sitemap" class="menu-link">
        <span uk-icon="icon: grid; ratio: 1.4"></span>
        <span class="menu-text" <?=$text?>>사이트맵</span>
      </a>
    </li>
  </ul>
</div>

<div class="uk-width-expand">
  <a href="#" class="onoff-btn">
    <span uk-icon="<?=$arrow?>">
  </a>