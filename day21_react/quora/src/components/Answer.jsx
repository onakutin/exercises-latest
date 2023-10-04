import { Likes } from "./Likes";

const Answer = ({ answer }) => {
	return (
		<>
			<p>{answer}</p>
			<Likes />
		</>
	);
};

export default Answer;
