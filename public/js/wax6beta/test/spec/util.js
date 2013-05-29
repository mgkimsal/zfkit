describe('util', function() {
  // beforeEach(function() {
  //   player = new Player();
  //   song = new Song();
  // });

  /*
  it('should be able to recognize strings', function() {
      expect(wax.util.isString('Tom')).toEqual(true);
      expect(wax.util.isString(2)).toEqual(false);
  });

  it('should be able to recognize arrays', function() {
      expect(wax.util.isArray('Tom')).toEqual(false);
      expect(wax.util.isArray([2])).toEqual(true);
  });

  it('should be able to get keys', function() {
      expect(wax.util.keys({a: 2})).toEqual(['a']);
      expect(wax.util.keys({})).toEqual([]);
  });
  */

  //describe("when song has been paused", function() {
  //  beforeEach(function() {
  //    player.play(song);
  //    player.pause();
  //  });

  //  it("should indicate that the song is currently paused", function() {
  //    expect(player.isPlaying).toBeFalsy();

  //    // demonstrates use of 'not' with a custom matcher
  //    expect(player).not.toBePlaying(song);
  //  });

  //  it("should be possible to resume", function() {
  //    player.resume();
  //    expect(player.isPlaying).toBeTruthy();
  //    expect(player.currentlyPlayingSong).toEqual(song);
  //  });
  //});

  //// demonstrates use of spies to intercept and test method calls
  //it("tells the current song if the user has made it a favorite", function() {
  //  spyOn(song, 'persistFavoriteStatus');

  //  player.play(song);
  //  player.makeFavorite();

  //  expect(song.persistFavoriteStatus).toHaveBeenCalledWith(true);
  //});

  ////demonstrates use of expected exceptions
  //describe("#resume", function() {
  //  it("should throw an exception if song is already playing", function() {
  //    player.play(song);

  //    expect(function() {
  //      player.resume();
  //    }).toThrow("song is already playing");
  //  });
  //});
});
