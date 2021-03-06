<div class="container">
    <div class="row pt-3">
        <div class="col-12">

            <h1 class="text-center mb-3">Create post</h1>

            <form id="post_info" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" id="post_title" name="post_title"
                        placeholder="Post Title..." />
                </div>

                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="post_photo" name="post_photo">
                        <label class="custom-file-label" for="customFile">Post photo...</label>
                    </div>
                </div>

                <div class="form-group">
                    <select class="browser-default custom-select" name="category_name">
                        <option selected disabled>Select Category</option>

                        <?php 
                            $categories = get_categories ();
                            foreach ($categories as $category):
                        ?>
                        <option value="<?=$category["name"]; ?>"><?=$category["name"]; ?></option>

                        <?php endforeach; ?>
                    </select>
                </div>


                <div class="toolbar">
                    <a href="#" data-command='undo'><i class='fa fa-undo'></i></a>
                    <a href="#" data-command='redo'><i class='fa fa-repeat'></i></a>
                    <a href="#" data-command='bold'><i class='fa fa-bold'></i></a>
                    <a href="#" data-command='italic'><i class='fa fa-italic'></i></a>
                    <a href="#" data-command='underline'><i class='fa fa-underline'></i></a>
                    <a href="#" data-command='strikeThrough'><i class='fa fa-strikethrough'></i></a>
                    <a href="#" data-command='justifyLeft'><i class='fa fa-align-left'></i></a>
                    <a href="#" data-command='justifyCenter'><i class='fa fa-align-center'></i></a>
                    <a href="#" data-command='justifyRight'><i class='fa fa-align-right'></i></a>
                    <a href="#" data-command='justifyFull'><i class='fa fa-align-justify'></i></a>
                    <a href="#" data-command='indent'><i class='fa fa-indent'></i></a>
                    <a href="#" data-command='outdent'><i class='fa fa-outdent'></i></a>
                    <a href="#" data-command='insertUnorderedList'><i class='fa fa-list-ul'></i></a>
                    <a href="#" data-command='insertOrderedList'><i class='fa fa-list-ol'></i></a>
                    <a href="#" data-command='h1'>H1</a>
                    <a href="#" data-command='h2'>H2</a>
                    <a href="#" data-command='createlink'><i class='fa fa-link'></i></a>
                    <a href="#" data-command='unlink'><i class='fa fa-unlink'></i></a>
                    <a href="#" class="font-weight-bold" data-command='p'>P</a>
                    <a href="#" data-command='subscript'><i class='fa fa-subscript'></i></a>
                    <a href="#" data-command='superscript'><i class='fa fa-superscript'></i></a>
                </div>
                <div id='editor' contenteditable=true data-text="Enter text here..."></div>
                <textarea name="post_text" id="post_text" required="required" class="d-none"></textarea>

                <div class="statusMsg"></div>

                <div class="form-group text-center">
                    <input type="submit" class="btn btn-default submitBtn" id="create_post" value="Create">
                </div>

            </form>
        </div>
    </div>
</div>