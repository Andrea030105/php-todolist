const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "server.php",
      newTask: "",
      toDoList: [],
    };
  },
  mounted() {
    axios.get(this.apiUrl).then((response) => {
      this.toDoList = response.data;
    });
  },
  methods: {
    addTask() {
      const data = {
        language: this.newTask,
      };

      axios
        .post(this.apiUrl, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.newTask = "";
          this.toDoList = response.data;
        });
    },
  },
}).mount("#app");
