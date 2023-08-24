/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**.{php,html,js}","./template-parts/*.{php,html,js}","./blocks/*/**.{php,html,js}"],
  theme: {
    extend: {
      fontFamily: {
        'SF Pro Display': ['SF Pro Display', 'sans-serif'],
      },

      colors: {
        'primary': '#009779;',
        'background': '#0F0F0F',
   
      },

      screens: {
        'lg': '1025px',
        'md': '769px',
      },

      height: {
   

      },
      fontSize: {
     
      },
      maxWidth:{
       
      }
    },
  },
  plugins: []
};
