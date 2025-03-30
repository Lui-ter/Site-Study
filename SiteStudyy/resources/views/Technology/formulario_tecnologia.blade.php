<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulario_tecn.css">
    <title>Deportes</title>
</head>
<body>
    <div class="form-container">
        <h1>Enter your store information</h1>
        <form>
            <div class="form-main-row">
                <div class="form-column">
                    <div class="form-group">
                        <label>Website name</label>
                        <input type="text" placeholder="Enter your website name">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea placeholder="Enter a brief description of the page"></textarea>
                    </div>

                    <div class="form-group">
                        <label>images from the website</label>
                        <div class="photos-container">
                            <div class="photo-row">
                                <div class="photo-item">
                                    <label>
                                        <span class="upload-icon">↑</span>
                                        <span>Upload first image</span>
                                        <input type="file" accept="image/*" style="display: none;">
                                        <input type="text" class="photo-description" placeholder="Description">
                                    </label>
                                </div>
                                <div class="photo-item">
                                    <label>
                                        <span class="upload-icon">↑</span>
                                        <span>Upload second image</span>
                                        <input type="file" accept="image/*" style="display: none;">
                                        <input type="text" class="photo-description" placeholder="Description">
                                    </label>
                                </div>
                            </div>
                            <div class="photo-row">
                                <div class="photo-item">
                                    <label>
                                        <span class="upload-icon">↑</span>
                                        <span>Upload third image</span>
                                        <input type="file" accept="image/*" style="display: none;">
                                        <input type="text" class="photo-description" placeholder="Description">
                                    </label>
                                </div>
                                <div class="photo-item">
                                    <label>
                                        <span class="upload-icon">↑</span>
                                        <span>Upload fourth image</span>
                                        <input type="file" accept="image/*" style="display: none;">
                                        <input type="text" class="photo-description" placeholder="Description">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-column">
                    <div class="form-group">
                        <label>describe the images</label>
                        <textarea placeholder="enter the description of each image"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="contact-group">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label>Boss of the page</label>
                                <input type="text" placeholder="Enter the boss name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group logo-upload">
                        <span class="upload-icon">↑</span>
                        <label>upload business logo</label>
                        <label>

                            <span>select logo</span>
                            <input type="file" accept="image/*" style="display: none;">
                        </label>
                    </div>

                    <button type="button">View website</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

