module.exports = function(grunt) {

  grunt.initConfig({
    lint: {
      files: ['server.js']
    }
  });

  grunt.registerTask('default', ['lint']);
  grunt.registerTask('travis', ['lint']);

};
