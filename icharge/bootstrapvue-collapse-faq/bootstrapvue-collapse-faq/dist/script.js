new Vue({
  el: "#app",
  data() {
    return {
      num: 0,
      showInfo1: [],
      showInfo2: [],
      joke_questions1: ['Today at the bank, an old lady asked me to help check her balance', 'I bought some shoes from a drug dealer.', 'My boss told me to have a good day...', 'What do you call a guy with a rubber toe? ', 'What did the pirate say when he turned 80 years old?', 'Why did the old man fall in the well?'],
      joke_answers1: ['So I pushed her over.', ' I don\'t know what he laced them with, but I\'ve been tripping all day.', ' so I went. home.', 'Roberto.', 'Aye matey.', 'Because he couldn\'t see that well.'],
      joke_questions2: ['Today at the bank, an old lady asked me to help check her balance', 'I bought some shoes from a drug dealer.', 'My boss told me to have a good day...', 'What do you call a guy with a rubber toe? ', 'What did the pirate say when he turned 80 years old?', 'Why did the old man fall in the well?'],
      joke_answers2: ['So I pushed her over.', ' I don\'t know what he laced them with, but I\'ve been tripping all day.', ' so I went. home.', 'Roberto.', 'Aye matey.', 'Because he couldn\'t see that well.'] };

  },
  created() {
    this.showInfo1 = this.joke_questions1.map(function () {
      return false;
    });
    this.showInfo2 = this.joke_questions2.map(function () {
      return false;
    });
  } });