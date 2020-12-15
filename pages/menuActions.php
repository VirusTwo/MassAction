<form id="bug_action" method="post" action="bug_actiongroup_page.php">
        <?php
        # -- ====================== MASS BUG MANIPULATION =================== --
        # @@@ ideally buglist-footer would be in <tfoot>, but that's not possible due to global g_checkboxes_exist set via write_bug_rows()
        ?>
        <div class="form-inline pull-right">
            <?php
                echo '<label class="inline">';
                echo '<input class="ace check_all input-sm" type="checkbox" id="bug_arr_all" name="bug_arr_all" value="all" />';
                echo '<span class="lbl padding-6">' . lang_get( 'select_all' ) . ' </span > ';
                echo '</label>';
                ?>

                <select name="action2" class="input-sm">
                    <?php print_all_bug_action_option_list()?>
                </select>

            <button type="submit" class="btn btn-primary btn-white btn-sm btn-round pull-right" formaction="bug_actiongroup_page.php"> <?php echo lang_get('ok'); ?> </button>
        </div>
        <?php # -- ====================== end of MASS BUG MANIPULATION ========================= -- ?>
</form>

