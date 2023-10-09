class AudioPlayer {
	constructor() {
		this.name = null;
		this.songList = [];
		this.currentListPosition = 0;
		this.defaultVolume = 5;
		this.volume = 5;
		this.isPlaying = false;
		this.shuffle = false;
		this.currentSongId = null;
		this.currentSongLength = null;
		this.currentSongName = null;
		this.currentSongInterpretter = null;
		this.repeat = false;
		this.currentTime = 0;
		this.isMinified = false;
		this.isMenuOpen = false;
	}
	trackForward() {
		this.currentListPosition++;
	}
	trackBackward() {
		this.currentListPosition--;
	}
	getSongName() {
		return this.currentSongName;
	}
	render() {
		// build HTML for the player
	}
	closeWindow() {
		// removes player from the page
	}
	openMenu() {
		this.isMenuOpen = true;
	}
	setVolume(volume) {
		this.volume = volume;
	}
	volumeUp() {
		this.volume++;
	}
	volumeDown() {
		this.volume--;
	}
	findNextSong() {
		if (this.shuffle) {
			this.shuffle();
		} else {
			this.currenListPosition++;
		}
	}
	// randomization logic
	shuffle() {
		// ...
		return 13; // random number from the list
	}
	mute() {
		this.volume = 0;
	}
	searchLibrary(search_term) {}
	minifyWindow() {
		this.isMinified = true;
	}
	setCurrentTime(time) {
		this.currentTime = time;
	}
}

export default AudioPlayer;
