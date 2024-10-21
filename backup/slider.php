<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Slider' clonable='1' order='2' > 
<cms:editable  name='slider' label='SLİDER' desc='Slider İçerik Yükleme' type='group' order='1' />
<cms:editable group='slider' type='image' name='kres' label='PC Resim (1600px 670px)' width='1600' height='670' crop='1' />
<cms:editable group='slider' type='image' name='mres' label='MOBİL Resim (768px 870px)' width='768' height='870' crop='1' />
<cms:editable group='slider' type='text' name='aciklama' label='Açıklama ' />
<cms:editable group='slider' type='text' name='link' label='Slider Linki' />

<cms:editable group='slider' name='folder_weights' validator='decimal' search_type='decimal' type='text' label='Slider Sıralaması' order='4' />
</cms:template>
<?php COUCH::invoke(); ?> 