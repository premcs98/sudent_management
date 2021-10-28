window.Parsley.addValidator('username', {
    validateString: function(value) {
      return value.length >= 4;
    },
    messages: {
      en: 'This string is not the reverse of itself'
    }
  });