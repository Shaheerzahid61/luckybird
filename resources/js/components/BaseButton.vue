<template>
    <button
      :class="['btn', variantClass, customClass]"
      :type="type"
      v-on="$listeners"
    >
      <slot></slot>
    </button>
  </template>
  
  <script>
  export default {
    props: {
      variant: {
        type: String,
        default: 'primary'
      },
      type: {
        type: String,
        default: 'button'
      },
      customClass: {
        type: String,
        default: ''
      }
    },
    computed: {
      variantClass() {
        return `btn-${this.variant}`;
      }
    }
  };
  </script>
  
  <style scoped>
  button {
    display:block;
  }
  </style>
  