import { useState } from "react";

export const NewAnswer = () => {
	const [newAnswer, setNewAnswer] = useState("");
	const [submitAnswer, setSubmitAnswer] = useState("");

	const handleNewAnswer = (e) => {
		setNewAnswer(e.target.value);
	};

	const handleSubmit = () => {
		setSubmitAnswer(newAnswer);
		setNewAnswer("");
	};

	return (
		<>
			{submitAnswer !== "" && <p>{submitAnswer}</p>}
			<form>
				<label htmlFor="submit-answer">
					Write your answer
					<textarea
						value={newAnswer}
						onChange={handleNewAnswer}
						name="submit-answer"
						id="submit-answer"
						cols="30"
						rows="10"
					></textarea>
					<button onClick={handleSubmit} type="button">
						Submit the answer
					</button>
				</label>
			</form>
		</>
	);
};

/////////////////// IS THE SAME AS

// const Answer = ({ answer }) => {
// 	const [newAnswer, setNewAnswer] = useState("");
// 	const [submitAnswer, setSubmitAnswer] = useState("");

// 	return (
// 		<>
// 			<p>{answer}</p>
// 			<Likes />
// 			{submitAnswer !== "" && <p>{submitAnswer}</p>}
// 			<form>
// 				<label htmlFor="submit-answer">
// 					Write your answer
// 					<textarea
// 						value={newAnswer}
// 						onChange={(e) => setNewAnswer(e.target.value)}
// 						name="submit-answer"
// 						id="submit-answer"
// 						cols="30"
// 						rows="10"
// 					></textarea>
// 					<button
// 						onClick={() => {
// 							setSubmitAnswer(newAnswer);
// 							setNewAnswer("");
// 						}}
// 						type="button"
// 					>
// 						Submit the answer
// 					</button>
// 				</label>
// 			</form>
// 		</>
// 	);
// };
