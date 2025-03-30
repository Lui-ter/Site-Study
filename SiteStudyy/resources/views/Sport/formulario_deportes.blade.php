<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulario_deportes.css">
    <title>Formulario deportes</title>
</head>
<body>
    <div class="form-container">
        <h1>Enter your store information</h1>
        <form action="{{ route('Agregar-Sports')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-main-row">
                <div class="form-column">
                    <div class="form-group">
                        <label>Website name</label>
                        <input name='webnombre' type="text" placeholder="Enter your website name">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name='wedescripcion' placeholder="Enter a brief description of the page"></textarea>
                    </div>

                    <div class="form-group">
                        <label>images from the website</label>
                        <div class="photos-container">
                            <div class="photo-row">
                                <div class="photo-item">
                                    <label>
                                        <span class="upload-icon">↑</span>
                                        <span>Upload first image</span>
                                        <input type="file" accept="image/*" style="display: none;"name="imagen1">
                                        <input type="text" class="photo-description" placeholder="Description" name="desImagen1">
                                    </label>
                                </div>
                                <div class="photo-item">
                                    <label>
                                        <span class="upload-icon">↑</span>
                                        <span>Upload second image</span>
                                        <input type="file" accept="image/*" style="display: none;" name="imagen2">
                                        <input type="text" class="photo-description" placeholder="Description" name="desImagen2">
                                    </label>
                                </div>
                            </div>
                            <div class="photo-row">
                                <div class="photo-item">
                                    <label>
                                        <span class="upload-icon">↑</span>
                                        <span>Upload third image</span>
                                        <input type="file" accept="image/*" style="display: none;" name="imagen3">
                                        <input type="text" class="photo-description" placeholder="Description" name="desImagen3">
                                    </label>
                                </div>
                                <div class="photo-item">
                                    <label>
                                        <span class="upload-icon">↑</span>
                                        <span>Upload fourth image</span>
                                        <input type="file" accept="image/*" style="display: none;" name="imagen4">
                                        <input type="text" class="photo-description" placeholder="Description" name="desImagen4">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-column">
                    <div class="form-group">
                        <label>describe the images</label>
                        <textarea name="descripcionImg" placeholder="enter the description of each image"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="contact-group">
                            <div class="form-group">
                                <label>Email</label>
                                <input name='email' type="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label>Coach's name</label>
                                <input name='coach' type="text" placeholder="Enter the coach's name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group logo-upload">
                        <span class="upload-icon">↑</span>
                        <label>upload business logo</label>
                        
                        <label>

                            <span>select logo</span>
                            <input name="logo" type="file" accept="image/*" style="display: none;">
                        </label>
                    </div>

                    <button type="submit">View website</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

