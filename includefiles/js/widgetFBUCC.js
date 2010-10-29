
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 3,
  interval: 4000,
  width: 200,
  height: 350,
  theme: {
    shell: {
      background: '#f1f1f3',
      color: '#ffffff'
    },
    tweets: {
      // background: '#f1f1f3',
      background: '#576878',
      color: '#fff',
      links: '#ccc'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true, // default False
    hashtags: true,
    timestamp: false,
    avatars: false,
    behavior: 'default'
  }
}).render().setUser('ncsuCareer').start();