<?php pr($raw); ?>
<?php
echo $this->Form->create('Fightermove');
echo $this->Form->input('direction',array('options' => array('north'=>'North','east'=>'East','south'=>'South','west'=>'West'), 'default' => 'North'));
echo $this->Form->end('Move');
?>

<?php
echo $this->Form->create('Fighterattack');
echo $this->Form->input('direction',array('options' => array('north'=>'North','east'=>'East','south'=>'South','west'=>'West'), 'default' => 'North'));
echo $this->Form->end('Attack');
?>