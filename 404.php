<?php get_header();?>
<div class="video-container">
    <div class="p-main-title blur">
      <h1>PAGE ERROR 404 </h1>
    </div>
    <video class='video' src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/Snow.mp4" autoplay muted loop></video>
  </div>
  <main>
    <ul class="share">
      <li><span>2021 PENTA AND PENNE</span></li>
      <li><a><i class="bi bi-twitter"></i></a></li>
      <li><span>SHERE</span></li>
    </ul>
    <div class="l-main-container">
      <div class="p-error-box">
        <h1><?php echo esc_html( 'Nothing here', 'pentaandpenne' ); ?></h1>
        <p><?php echo esc_html( 'お探しのページが見つかりませんでした。お探しのページは削除または移動した可能性があります。', 'pentaandpenne' ); ?></p>
        <? get_search_form(); ?>
      </div>
    </div>
  </main>

<?php
get_sidebar();
get_footer();



import "./styles.css";
import { useState } from "react";
import axios from "axios";
import { Todo } from "./Todo";


type TodoType = {
  userId: number;
  id: number;
  title: string;
  completed: boolean;
};

export default function App() {
  const [todos, setTodos] = useState<Array<TodoType>>([]);

  const onClickFetchData = () => {
    axios
      .get<Array<TodoType>>("https://jsonplaceholder.typicode.com/todos/")
      .then((res) => {
        setTodos(res.data);
      });
  };
  return (
    <div className="App">
      <button onClick={onClickFetchData}>データ取得</button>
      {todos.map((todo) => (
        <Todo title={todo.title} userId={todo.userId} completed={todo.completed} />
      ))}
    </div>
  );
}

type TodoType = {
  userId: number;
  title: string;
  completed?: boolean;
};

export const Todo = (props: TodoType) => {
  const { title, userId, completed = false } = props;
  const completeMark = completed ? "[完]" : "[未]";

  return <p>{`${completeMark}${title}(ユーザー:${userId})`}</p>;
};
