import Toggle from "./Toggle";

const TodoItem = (task) => {
	return (
		<h3>
			{task.desc} <Toggle />
		</h3>
	);
};

export default TodoItem;
