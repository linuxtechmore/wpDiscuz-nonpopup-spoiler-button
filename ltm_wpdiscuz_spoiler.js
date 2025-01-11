jQuery(document).ready(function ($) {
    $(document).on('click', '.ql-bu-spoiler', function () {
        // Find the closest editor to this button
        const editor = $(this).closest('.wpd-form-wrapper').find('.ql-editor');
        
        if (editor.length) {
            const selection = window.getSelection();
            let range;

            // Ensure the editor is focused
            if (!editor.is(':focus')) {
                editor.focus();
            }

            // Check if there's a selection
            if (selection.rangeCount > 0) {
                range = selection.getRangeAt(0);
                const selectedText = range.toString(); // Get the selected text

                if (selectedText) {
                    // Wrap selected text in the spoiler shortcode
                    const spoilerText = `[spoiler]${selectedText}[/spoiler]`;
                    range.deleteContents(); // Remove the selected text
                    range.insertNode(document.createTextNode(spoilerText)); // Insert the spoiler text

                    // Move the caret to the end of the inserted text
                    range.collapse(false);
                    selection.removeAllRanges();
                    selection.addRange(range);
                } else {
                    // Insert a spoiler placeholder at the caret position
                    const placeholder = `[spoiler]Your spoiler content here[/spoiler]`;
                    const placeholderNode = document.createTextNode(placeholder);

                    // Insert the placeholder without creating new lines
                    range.deleteContents();
                    range.insertNode(placeholderNode);

                    // Move caret after the inserted placeholder
                    range.setStartAfter(placeholderNode);
                    range.setEndAfter(placeholderNode);
                    selection.removeAllRanges();
                    selection.addRange(range);
                }

                // Remove auto-inserted <p> or <br> tags
                editor.find('p:empty, br').remove();
            }
        }
    });
});
