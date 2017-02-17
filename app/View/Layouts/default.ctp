<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Linea de Producción');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(
			array(
				'myStyle.css',
				'bootstrap.min',
				'bootstrap-theme.min',
				'animate.css',
				'fileinput.min',
				'jquery-ui.min'
				)
			);
		echo $this->Html->script(
			array(
				'jquery.min',
				'docs.min',
				'bootstrap.min',
				'scriptControl',
				'fileinput.min',
				'jquery-ui.min'
				)
			);
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript">
		$("#foto").fileinput();
		var basePath = "<?php echo Router::url('/'); ?>";
		$("#ine_frontal").fileinput();
		var basePath = "<?php echo Router::url('/'); ?>";
		$("#ine_trasera").fileinput();
		var basePath = "<?php echo Router::url('/'); ?>";
		$("#dom").fileinput();
		var basePath = "<?php echo Router::url('/'); ?>";
	</script>

</head>
<body>


 <?php echo $this->element('menu'); ?>

  <div class="container theme-showcase" role="main">

      		<div class="col-md-12 messageCssSession" id='menssageSession'>
      			<?php echo $this->Session->flash(); ?>		
      		</div>
      		
			<?php echo $this->fetch('content'); ?>
  </div>
</body>
</html>
