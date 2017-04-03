<div class="container">
    <h2>You are in the View: application/view/song/edit.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Edit a song</h3>
        <form action="<?php echo URL; ?>songs/updatesong" method="POST">
            <label>Artist</label>
            <input autofocus type="text" name="hofundur" value="<?php echo htmlspecialchars($book->hofundur, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Track</label>
            <input type="text" name="nafn" value="<?php echo htmlspecialchars($book->nafn, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Link</label>
            <input type="text" name="utgafuar" value="<?php echo htmlspecialchars($book->utgafuar, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="book_id" value="<?php echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_books" value="Update" />
        </form>
    </div>
</div>

