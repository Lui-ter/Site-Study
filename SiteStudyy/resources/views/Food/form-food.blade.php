<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <title>Training Season</title>
</head>
<body>
    <div class="form-container">
        <h1>Configuración de Training Season</h1>
        <form action="{{ route('view-Food') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-main-row">
                <div class="form-column">
                    <div class="form-group">
                        <label>website name</label>
                        <input type="text"  name="website_name" placeholder="Training SeasonS">
                        @error('website_name')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea placeholder="Enter a brief description of your product" name="Description"></textarea>
                        @error('Description')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Slogan</label>
                        <input type="text" placeholder="fast, high-quality food to satisfy customers" name="slogan">
                        @error('slogan')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Website Image</label>
                        <div class="photos-container">
                            <div class="photo-item">
                                <label>
                                    <span class="upload-icon">↑</span>
                                    <span>Logo photo</span>
                                    <input type="file" accept="image/*" style="display: none;" name="imagen">
                                    @error('imagen')
                                    <div class="error">{{ $message }}</div>
                                    @enderror

                                    <input type="text" class="photo-description" placeholder="Description" name="product_description">
                                    @error('product_description')
                                    <div class="error">{{ $message }}</div>
                                    @enderror
                                </label>
                            </div>
                            <div class="photo-item">
                                <label>
                                    <span class="upload-icon">↑</span>
                                    <span>Enter the second photo</span>
                                    <input type="file" accept="image/*" style="display: none;" name="imagen_1">
                                    @error('imagen_1')
                                    <div class="error">{{ $message }}</div>
                                    @enderror

                                    <input type="text" class="photo-description" placeholder="Description" name="product_description_1">
                                    @error('product_description_1')
                                    <div class="error">{{ $message }}</div>
                                    @enderror
                                </label>
                            </div>
                            <div class="photo-item">
                                <label>
                                    <span class="upload-icon">↑</span>
                                    <span>Enter the third photo</span>
                                    <input type="file" accept="image/*" style="display: none;" name="imagen_2">
                                    @error('imagen_2')
                                    <div class="error">{{ $message }}</div>
                                    @enderror

                                    <input type="text" class="photo-description" placeholder="Description" name="product_description_2">
                                    @error('product_description_2')
                                    <div class="error">{{ $message }}</div>
                                    @enderror
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-column">
                    <div class="form-group">
                        <label>Products/Food Name</label>
                        <div class="form-group">
                            <input type="text" placeholder="Title for first image" name="food_name">
                            @error('food_name')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Title for second image" name="food_name_2">
                            @error('food_name')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Title for third image" name="food_name_3">
                            @error('food_name')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- <label>How many products do you need?</label>
                        <div class="form-group">
                            <input type="text" value="Training Season">
                        </div>   -->
                    </div>
                    <div class="form-group">
                            <label>Food Description</label>
                            <textarea name="food"></textarea>
                            @error('food')
                                <div class="error">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label>Food price</label>
                        <input type="text"  name="food_price">
                        @error('food_price')
                                <div class="error">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Three images of food</label>
                        <div class="photos-container">
                            <div class="photo-item">
                                <label>
                                    <span class="upload-icon">↑</span>
                                    <span>first photo of the food</span>
                                    <input type="file" accept="image/*" style="display: none;" name="imagen_3">
                                    @error('imagen_3')
                                        <div class="error">{{ $message }}</div>
                                    @enderror

                                    <input type="text" class="photo-description" placeholder="Description" name="food_description">
                                    @error('food_description')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </label>
                            </div>
                            <div class="photo-item">
                                <label>
                                    <span class="upload-icon">↑</span>
                                    <span>second photo of the food</span>
                                    <input type="file" accept="image/*" style="display: none;" name="imagen_4">
                                    @error('imagen_4')
                                        <div class="error">{{ $message }}</div>
                                    @enderror

                                    <input type="text" class="photo-description" placeholder="Descripción" name="food_description_2">
                                    @error('food_description_2')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </label>
                            </div>
                            <div class="photo-item">
                                <label>
                                    <span class="upload-icon">↑</span>
                                    <span>Third photo of the food</span>
                                    <input type="file" accept="image/*" style="display: none;" name="imagen_5">
                                    @error('imagen_5')
                                        <div class="error">{{ $message }}</div>
                                    @enderror

                                    <input type="text" class="photo-description" placeholder="Description" name="food_description_3">
                                    @error('food_description_3')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button type="submit" class="btn-website">View website</button>
        </form>
    </div>
</body>
</html>
