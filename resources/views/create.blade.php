
<div style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
        <h1>Create Blog Post</h1>
        <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="title" style="display: block; font-weight: bold;">Title</label>
                <input type="text" id="title" name="title" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" required>
            </div>
            <div style="margin-bottom: 15px;">
                <label for="description" style="display: block; font-weight: bold;">Description</label>
                <textarea id="description" name="description" rows="4" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" required></textarea>
            </div>
            <div style="margin-bottom: 15px;">
                <label for="image" style="display: block; font-weight: bold;">Image</label>
                <input type="file" id="image" name="image" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>
            <button type="submit" style="padding: 10px 20px; background-color: #4caf50; color: white; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
        </form>
    </div>
