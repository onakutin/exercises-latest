import { BrowserRouter } from "react-router-dom";
import "./App.css";
import Homepage from "./Components/Homepage";

function App() {
	return (
		<>
			<BrowserRouter>
				<Homepage />
			</BrowserRouter>
		</>
	);
}

export default App;
