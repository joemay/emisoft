<div class = "signatures-source" > 

<h3> Asignaturas </h3>
<ul>
<? foreach($items as $item): ?>
<li class="signature-source"><?= $item->nombre ?>
<a class="remove hidden" href="#">Quitar</a> <input type = "hidden"
name = "signature"
value = "<?= $item->id; ?>" >
</li>                        
<? endforeach; ?>
</ul> </div>

<div class="portfolio">
<h3>Portafolio</h3 >
<div class = "signatures-target"> <p class = "hint" > Arrastra tus asignaturas aqu&iacute; </p>
<ul class="signatures-added"></ul> </div>
</div>


