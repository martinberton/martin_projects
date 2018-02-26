<form>
    Name: <input type="text" id="fullName" size="25" />   <br />
    Feedback:    <textarea id="feedback" cols="30" rows="3"></textarea><br/><br />
    Favorite soccer french team: <br>
    <select id="Favorite soccer french team">
      <option value="EAG">En Avant Guingamp</option>
      <option value="DFCO">FC Dijon</option>
      <option value="ASSE">AS Saint Etienne</option>
      <option value="OGC">OGC Nice</option>
      <option value="CAEN">Caen</option>
      <option value="GdB">Girondins de Bordeaux</option>
      <option value="UFCS">Strasbourg</option>
      <option value="SdR">Stade de Rennes</option>
      <option value="ASC">Amiens SC</option>
      <option value="FCN">FC Nantes</option>
      <option value="TFC">Toulouse FC</option>
      <option value="MSHC">Montpelier</option>
      <option value="SCO">SCO Angers</option>
      <option value="OL">Olympique Lyonnais</option>
      <option value="ESTAC">Troyes</option>
      <option value="OM">Olympique de Marseille</option>
      <option value="LOSC">Lille</option>
      <option value="ASM">AS Monaco</option>
      <option value="FCM">FC Metz</option>
      <option value="PSG">Paris Saint Germain</option>
  </select>    <br /><br />
    Who is the best player:    <br>
    <input type="radio"  id="item1"  name="degreeChoices"  value="High School" >
         <label for="item1">Lionel Messi</label> <br>
    <input type="radio"  id="item2"  name="degreeChoices" value="College">
          <label for="item2">Cristiano Ronaldo</label> <br><br>
    Which team will win the Champions league: <br>
    <input type="checkbox" id="basket"  name="sports" value="basket">
            <label for="basket"> Manchester City </label> <br>
     <input type="checkbox" id="soccer" name="sports" value="basket">
            <label for="soccer"> FC Barcelona </label>
    <br/><br/>
    <input type="button" value="Submit" onclick="displayData()"/>
  </form>
 
