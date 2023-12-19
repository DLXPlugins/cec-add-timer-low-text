/**
 * Set up the timer low text by hooking into the event system.
 */

// Import the addFilter function.
const { addFilter } = wp.hooks;

// Set the low timer text.
const sceLowTimerText = 'Low Timer';

/**
 * Hook into document.load.
 */
document.addEventListener( 'DOMContentLoaded', () => {

	/**
	 * JSFilter: sce.comment.timer.text
	 *
	 * Filter triggered before a timer is returned
	 *
	 * @since 1.4.0
	 *
	 * @param  string comment text
	 * @param  string minute text,
	 * @param  string second text,
	 * @param  int    number of minutes left
	 * @param  int    seconds left
	 */
	addFilter( 'sce.comment.timer.text', 'sce-add-timer-low-text', ( text, minuteText, secondText, numMinutesLeft, numSecondsLeft ) => {

		if ( numMinutesLeft === 0 && numSecondsLeft <= 30 ) {
			text += ' (' + sceLowTimerText + ')';
		}
		return text;
	}, 11 );
} );
