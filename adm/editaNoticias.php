<?php


$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET["id"]);

$sql="select * from noticias where noticiaId=".$id;
$resultEstabelecimentos=mysqli_query($con,$sql);
$dadosEstabelecimentos=mysqli_fetch_array($resultEstabelecimentos);
?>
<!DOCTYPE HTML>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <section class="store" style="padding:50px">



        <a href="listaNoticias.php"><button type="button" class="btn btn-danger">Voltar</button></a>
        <hr>
        <form action="confirmaEditaNoticias.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

            <label style="color:black; font-size: 15px" class="badge badge-white">Nome da Notícia: </label>
            <input type="text"  class="col-2 col-form-label  " name="noticiaNome" value="<?php echo $dadosEstabelecimentos["noticiaTitulo"]?>">
            <label  style="color:black; font-size: 15px" class="badge badge-white col-2" > </label>
            <label  style="color:black; font-size: 15px" class="badge badge-white" > Data</label>

            <input class="col-2 col-form-label  " type="date"  name="Data" value="<?php echo $dadosEstabelecimentos["noticiaData"]?>" id="example-date-input">

            <label  style="color:black; font-size: 15px" class="badge badge-white col-2" > </label>
            <label  style="color:black; font-size: 15px" class="badge badge-white ">Hora</label>

            <input class="col-2 col-form-label" type="time" name="Hora" value="<?php echo $dadosEstabelecimentos["noticiasH"]?>" id="example-time-input">




            <div class="form-group row">
                <!--
                <label  for="example-date-input" class="col-2 col-form-label "> Data</label>
                -->








                <div class="row">
                    <!--
                    <label for="example-time-input" class="col-2 col-form-label">Hora</label>
                    -->

                </div>

            </div>





            <link href="summernote.css" rel="stylesheet">
            <script src='../js2/tinymce/tinymce.min.js'></script>
            <!--
            <label style="color:white; font-size: 15px" class="badge badge-dark">Descrição da Notícia: </label>
            -->
            <label  style="color:black; font-size: 15px" class="badge badge-white">Descrição da Notícia: </label>
            <script>

                tinymce.init({
                    selector: 'textarea#myTextarea',
                    plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                    imagetools_cors_hosts: ['picsum.photos'],
                    menubar: 'file edit view insert format tools table help',
                    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                    toolbar_sticky: true,
                    autosave_ask_before_unload: true,
                    autosave_interval: "30s",
                    autosave_prefix: "{path}{query}-{id}-",
                    autosave_restore_when_empty: false,
                    autosave_retention: "2m",
                    image_advtab: true,
                    /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
                    link_list: [
                        { title: 'My page 1', value: 'https://www.codexworld.com' },
                        { title: 'My page 2', value: 'https://www.xwebtools.com' }
                    ],
                    image_list: [
                        { title: 'My page 1', value: 'https://www.codexworld.com' },
                        { title: 'My page 2', value: 'https://www.xwebtools.com' }
                    ],
                    image_class_list: [
                        { title: 'None', value: '' },
                        { title: 'Some class', value: 'class-name' }
                    ],
                    importcss_append: true,
                    file_picker_callback: function (callback, value, meta) {
                        /* Provide file and text for the link dialog */
                        if (meta.filetype === 'file') {
                            callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
                        }
                        /* Provide image and alt text for the image dialog */
                        if (meta.filetype === 'image') {
                            callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
                        }
                        /* Provide alternative source and posted for the media dialog */
                        if (meta.filetype === 'media') {
                            callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
                        }
                    },
                    templates: [
                        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                        { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                        { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
                    ],
                    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                    height: 600,
                    image_caption: true,
                    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                    noneditable_noneditable_class: "mceNonEditable",
                    toolbar_mode: 'sliding',
                    contextmenu: "link image imagetools table",
                });
            </script>

            <textarea name="noticiaDescricao" id="myTextarea" ><?php echo $dadosEstabelecimentos["noticiaDescricao"]?></textarea>

            <hr>





            <hr>




            <hr>
            <script>
                function preview_image(event) {
                    var reader = new FileReader();
                    reader.onload = function () {
                        var output = document.getElementById('output_image');
                        output.src = reader.result;
                    }
                    reader.readAsDataURL(event.target.files[0]);
                }
            </script>
            <div class="container">
                <h2 align="center" style="margin-top: 10%">

                        <input type="hidden" name="imagemId" value="<?php echo $id ?>">

                        <label>Imagem Inicial:</label><br>
                        <img width="400" id="output_image" src="../<?php echo $dadosEstabelecimentos['noticiaURL']?>"><br>
                    <input type="file" name="nomeImagem"><br>


            </div>


            <hr>



            <input type="Submit"  aria-describedby="inputGroup-sizing-sm" class="btn btn-success" value="Edita" ><br>











        </form>
    </section>
