<form>
<?php
require_once $this->fetchViewLocation("helper_functions", "", "plugins/rich-editor");

echo renderEditorShell();
echo "<hr/>";

echo "<h2>Paragraph Level Formatting Menu</h2>";

echo renderRichEditorParagraphMenu();

echo "<hr/>";

echo "<h2>Inline Level Formatting Menu</h2>";

echo renderRichEditorInlineMenu();

echo "<hr/>";

?>

<textarea class="BodyBox" format="Rich"></textarea>
</form>

<!--<h2>@mention menu</h2>-->
<!--<div class="richEditor-menu richEditorLinkMenu">-->
<!--    <ul class="richEditor-menuItems MenuItems" role="menubar" aria-label="--><?php //echo t('@mention'); ?><!--">-->
<!--        <li class="richEditor-menuItem" role="menuitem">-->
<!--            <a href="#" class="richEditorLinkMenu-link">-->
<!--                <span class="richEditorLinkMenu-photoWrap">-->
<!--                    <img src="https://secure.gravatar.com/avatar/b0420af06d6fecc16fc88a88cbea8218/?default=https%3A%2F%2Fvanillicon.com%2Fb0420af06d6fecc16fc88a88cbea8218_200.png&amp;rating=g&amp;size=120" alt="Linc" class="richEditorLinkMenu-photo"/>-->
<!--                </span>-->
<!--                <span class="richEditorLinkMenu-userName">-->
<!--                    <mark class="richEditorLinkMenu-mark">Fra</mark>nk-->
<!--                </span>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</div>-->
