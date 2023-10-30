import { useState } from "react";

const Answer = (props) => {
	const [likes, setLikes] = useState(0);

	const handleClick = () => {
		setLikes(likes + 1);
	};

	return (
		<>
			<p>
				{props.answer} Likes: {likes}
			</p>
			<button onClick={handleClick}>Give like</button>
		</>
	);
};

export default Answer;
