const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "server.php",
      newTask: "",
      toDoList: [],
      errorMex: "",
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
      if (this.newTask.trim() != "" && this.newTask != "") {
        axios
          .post(this.apiUrl, data, {
            headers: { "Content-Type": "multipart/form-data" },
          })
          .then((response) => {
            this.newTask = "";
            this.toDoList = response.data;
          });
        this.errorMex = "";
      } else {
        this.errorMex = "NON PUOI INSERIRE UNA TASK VUOTA!!";
      }
    },
    deleteTask(index) {
      const data = {
        element: index,
      };
      axios
        .post(this.apiUrl, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.toDoList = response.data;
        });
    },
  },
}).mount("#app");
