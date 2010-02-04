<?php
/**
* @version $Id$
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2010 Kunena Team All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.com
*
* Based on FireBoard Component
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
*
* Based on Joomlaboard Component
* @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF & Jan de Graaff
**/
defined( '_JEXEC' ) or die();

?>
<div class="k_bt_cvr1">
<div class="k_bt_cvr2">
<div class="k_bt_cvr3">
<div class="k_bt_cvr4">
<div class="k_bt_cvr5">
<form action = "<?php echo JRoute::_(KUNENA_LIVEURLREL.'&amp;func=myprofile&amp;do=updateset'); ?>" method = "post" name = "postform">
	<input type = "hidden" name = "do" value = "updateset">
	<table class = "kblocktable" id = "kforumprofile_sub" border = "0" cellspacing = "0" cellpadding = "0" width="100%">
		<thead>
			<tr>
				<th colspan = "2">
					<div class = "ktitle_cover">
						<span class = "ktitle"><?php echo JText::_(COM_KUNENA_USER_GENERAL); ?></span>
					</div>
				</th>
			</tr>
		</thead>

		<tbody class = "kmyprofile_general">
			<tr >
				<td>
					<strong><?php echo JText::_(COM_KUNENA_USER_ORDER); ?>*</strong>:
				</td>

				<td>
					<?php
					// make the select list for the view type
					$yesno1[] = JHTML::_('select.option', 0, JText::_(COM_KUNENA_USER_ORDER_ASC));
					$yesno1[] = JHTML::_('select.option', 1, JText::_(COM_KUNENA_USER_ORDER_DESC));
					// build the html select list
					$tosend   = JHTML::_('select.genericlist', $yesno1, 'neworder', 'class="inputbox" size="2"', 'value', 'text', $this->kunena_ordering);
					echo $tosend;
					?>
				</td>
			</tr>
            <tr >
				<td>
					<strong><?php echo JText::_(COM_KUNENA_USER_HIDEEMAIL); ?>*</strong>:
				</td>

				<td colspan = "2">
					<?php
					// make the select list for the view type
					$yesno3[] = JHTML::_('select.option', 0, JText::_(COM_KUNENA_A_NO));
					$yesno3[] = JHTML::_('select.option', 1, JText::_(COM_KUNENA_A_YES));
					// build the html select list
					$tosend   = JHTML::_('select.genericlist', $yesno3, 'newhideEmail', 'class="inputbox" size="2"', 'value', 'text', $this->kunena_hide_email);
					echo $tosend;

					?>
				</td>
			</tr>

            <tr >
				<td>
					<strong><?php echo JText::_(COM_KUNENA_USER_SHOWONLINE); ?>*</strong>:
				</td>

				<td>
					<?php
					// make the select list for the view type
					$yesno4[] = JHTML::_('select.option', 0, JText::_(COM_KUNENA_A_NO));
					$yesno4[] = JHTML::_('select.option', 1, JText::_(COM_KUNENA_A_YES));
					// build the html select list
					$tosend   = JHTML::_('select.genericlist', $yesno4, 'newshowOnline', 'class="inputbox" size="2"', 'value', 'text', $this->kunena_show_online);
					echo $tosend;

					?>
				</td>
			</tr>


			<tr>
				<td colspan = "2" align="center">
					<input type = "submit" class = "button" value = "<?php echo JText::_(COM_KUNENA_GEN_SUBMIT);?>">
				</td>
			</tr>
            <tr >
				<td colspan = "2">
					<?php echo '<br /><font size="1"><em>*' . JText::_(COM_KUNENA_USER_CHANGE_VIEW) . '</em></font>'; ?>
				</td>
			</tr>
		</tbody>
	</table>
</form>
</div>
</div>
</div>
</div>
</div>
