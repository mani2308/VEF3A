<div class="container">
    <h1>Songs</h1>
    <h2>You are in the View: application/view/song/index.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div class="box">
        <h3>Add a song</h3>
        <form action="<?php echo URL; ?>songs/addsong" method="POST">
            <label>Artist</label>
            <input type="text" name="hofundur" value="" required />
            <label>Track</label>
            <input type="text" name="nafn" value="" required />
            <label>Link</label>
            <input type="text" name="utgafuar" value="" />
            <input type="submit" name="submit_add_book" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of books: <?php echo $amount_of_books; ?></h3>
        <h3>Amount of books (via AJAX)</h3>
        <div id="javascript-ajax-result-box"></div>
        <div>
            <button id="javascript-ajax-button">Click here to get the amount of books via Ajax (will be displayed in #javascript-ajax-result-box ABOVE)</button>
        </div>
        <h3>List of books (data from model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Höfundur</td>
                <td>Bók</td>
                <td>Útgáfuár</td>
                <td>DELETE</td>
                <td>EDIT</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?php if (isset($book->id)) echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->artist)) echo htmlspecialchars($book->hofundur, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->track)) echo htmlspecialchars($book->nafn, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php if (isset($book->link)) { ?>
                            <a href="<?php echo htmlspecialchars($book->utgafuar, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($book->utgafuar, ENT_QUOTES, 'UTF-8'); ?></a>
                        <?php } ?>
                    </td>
                    <td><a href="<?php echo URL . 'songs/deletesong/' . htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'songs/editsong/' . htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
