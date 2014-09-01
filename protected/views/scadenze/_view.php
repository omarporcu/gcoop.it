<?php
/* @var $this ScadenzeController */
/* @var $data Scadenze */
?>

<div class="post">

	<?php
	
		$color="notice";
		$now=date('d-m-Y', strtotime("now"));
		$text="";
		
		$scad_ass=str_replace('/','-',$data->scadenza_assicurazione);
		$scad_bol=str_replace('/','-',$data->scadenza_bollo);

		$scad_ass=strtotime($scad_ass);
		$scad_bol=strtotime($scad_bol);
		$now=strtotime($now);
		$prossimo=$now+604800;
		
		//var_dump($scad_ass);
		//var_dump($scad_bol);
		//var_dump($now);
	
		if ($scad_ass<$now || $scad_bol<$now) {
			if($scad_ass < $now) {
				$color="error";
				$text=$text." Assicurazione Scaduta ";
			}
			if($scad_bol < $now) {
				$color="error";
				$text=$text." Bollo Scaduto ";
			}
		} elseif ($scad_ass<$prossimo || $scad_bol<$prossimo) {
			if($scad_ass < $prossimo) {
				$color="notice";
				$text=$text." Assicurazione ";
			}
			if($scad_bol < $prossimo) {
				$color="notice";
				$text=$text." Bollo ";
			}
		} else {
			$color="success";
		}

		//var_dump($text);
	
	?>

	<div class="title">
		<?php echo CHtml::link(CHtml::encode($text." ".$data->marca." ".$data->modello." - ".$data->targa), "../parco/".$data->id); ?>
	</div>
	<div class="flash-<?php echo $color ?>">
		Assicurata da <?php echo $data->assicurazione . ' con scadenza ' . $data->scadenza_assicurazione; ?>
		<br/>
		Scadenza bollo il <?php echo $data->scadenza_bollo; ?>
	</div>
	<div class="content">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			//echo $data->note;
			$this->endWidget();
		?>
	</div>
</div>
<p></p>