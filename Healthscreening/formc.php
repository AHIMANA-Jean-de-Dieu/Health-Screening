<!DOCTYPE html>
<html lang="en">
 <head>
  <title>form</title>
 </head>
 <body style="background-color:#afd2ed" >
  <center><h1>Online Health Screening Form</h1>
<h2>Part 1. Contact Details</h2>
<form action= "formfill.php" method="GET">
	<label><font size="4" color=""><strong>Full Name:</strong></font></label>&nbsp;&nbsp;&nbsp;&nbsp;<label>First Name:</label>
<input type="text" name="fname"  size="" value="" required>&nbsp;&nbsp;<label>Last Name:</label><input type="text" name="lname"  size="" value="" required><br><br>

<label>Best Contact Number:</label>
<input type="text"  name="mobile"  size="20" value="" placeholder="Mobile" required><br><br>

<label>E-mail:</label>
<input type="email" name="email" size="40" value="" placeholder="ex: myname@example.com" required><br><br>

<label>Address:</label>
<input type="text" name="streetaddress" value="" placeholder="street address" required><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="streetl2" value="" placeholder="street address line 2" required><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="city"  size="10" value="" placeholder="city" required>&nbsp;&nbsp;<input type="text" name="province"  size="10" value="" placeholder="state/province" required><br><br>

<label>Emergency Contact Person:</label>
<input type="tel" name="areacode" value="" placeholder="Areacode" required>-<input type="tel" name="emphone" value="" placeholder="phone number" required><br><br>

<h2>Part 2. Personal Measurement</h2>

<label>Date Of Birth:</label>
<select name="birthday"><option> </option><option value="January"> January </option><option value="February"> February </option><option value="March"> March </option><option value="April"> April </option><option value="May"> May </option><option value="June"> June </option><option value="July"> July </option><option value="August"> August </option><option value="September"> September </option><option value="October"> October </option><option value="November"> November </option><option value="December"> December </option></select>

<select name="birthday"><option> </option><option value="1"> 1 </option><option value="2"> 2 </option><option value="3"> 3 </option><option value="4"> 4 </option><option value="5"> 5 </option><option value="6"> 6 </option><option value="7"> 7 </option><option value="8"> 8 </option><option value="9"> 9 </option><option value="10"> 10 </option><option value="11"> 11 </option><option value="12"> 12 </option><option value="13"> 13 </option><option value="14"> 14 </option><option value="15"> 15 </option><option value="16"> 16 </option><option value="17"> 17 </option><option value="18"> 18 </option><option value="19"> 19 </option><option value="20"> 20 </option><option value="21"> 21 </option><option value="22"> 22 </option><option value="23"> 23 </option><option value="24"> 24 </option><option value="25"> 25 </option><option value="26"> 26 </option><option value="27"> 27 </option><option value="28"> 28 </option><option value="29"> 29 </option><option value="30"> 30 </option><option value="31"> 31 </option></select>

<select name="birthday"><option> </option><option value="2021"> 2021 </option><option value="2020"> 2020 </option><option value="2019"> 2019 </option><option value="2018"> 2018 </option><option value="2017"> 2017 </option><option value="2016"> 2016 </option><option value="2015"> 2015 </option><option value="2014"> 2014 </option><option value="2013"> 2013 </option><option value="2012"> 2012 </option><option value="2011"> 2011 </option><option value="2010"> 2010 </option><option value="2009"> 2009 </option><option value="2008"> 2008 </option><option value="2007"> 2007 </option><option value="2006"> 2006 </option><option value="2005"> 2005 </option><option value="2004"> 2004 </option><option value="2003"> 2003 </option><option value="2002"> 2002 </option><option value="2001"> 2001 </option><option value="2000"> 2000 </option><option value="1999"> 1999 </option><option value="1998"> 1998 </option><option value="1997"> 1997 </option><option value="1996"> 1996 </option><option value="1995"> 1995 </option><option value="1994"> 1994 </option><option value="1993"> 1993 </option><option value="1992"> 1992 </option><option value="1991"> 1991 </option><option value="1990"> 1990 </option><option value="1989"> 1989 </option><option value="1988"> 1988 </option><option value="1987"> 1987 </option><option value="1986"> 1986 </option><option value="1985"> 1985 </option><option value="1984"> 1984 </option><option value="1983"> 1983 </option><option value="1982"> 1982 </option><option value="1981"> 1981 </option><option value="1980"> 1980 </option><option value="1979"> 1979 </option><option value="1978"> 1978 </option><option value="1977"> 1977 </option><option value="1976"> 1976 </option><option value="1975"> 1975 </option><option value="1974"> 1974 </option><option value="1973"> 1973 </option><option value="1972"> 1972 </option><option value="1971"> 1971 </option><option value="1970"> 1970 </option><option value="1969"> 1969 </option><option value="1968"> 1968 </option><option value="1967"> 1967 </option><option value="1966"> 1966 </option><option value="1965"> 1965 </option><option value="1964"> 1964 </option><option value="1963"> 1963 </option><option value="1962"> 1962 </option><option value="1961"> 1961 </option><option value="1960"> 1960 </option><option value="1959"> 1959 </option><option value="1958"> 1958 </option><option value="1957"> 1957 </option><option value="1956"> 1956 </option><option value="1955"> 1955 </option><option value="1954"> 1954 </option><option value="1953"> 1953 </option><option value="1952"> 1952 </option><option value="1951"> 1951 </option><option value="1950"> 1950 </option><option value="1949"> 1949 </option><option value="1948"> 1948 </option><option value="1947"> 1947 </option><option value="1946"> 1946 </option><option value="1945"> 1945 </option><option value="1944"> 1944 </option><option value="1943"> 1943 </option><option value="1942"> 1942 </option><option value="1941"> 1941 </option><option value="1940"> 1940 </option><option value="1939"> 1939 </option><option value="1938"> 1938 </option><option value="1937"> 1937 </option><option value="1936"> 1936 </option><option value="1935"> 1935 </option><option value="1934"> 1934 </option><option value="1933"> 1933 </option><option value="1932"> 1932 </option><option value="1931"> 1931 </option><option value="1930"> 1930 </option><option value="1929"> 1929 </option><option value="1928"> 1928 </option><option value="1927"> 1927 </option><option value="1926"> 1926 </option><option value="1925"> 1925 </option><option value="1924"> 1924 </option><option value="1923"> 1923 </option><option value="1922"> 1922 </option><option value="1921"> 1921 </option><option value="1920"> 1920 </option></select><br><br>

<label>Height cm:</label>
<input type="number" name="height"  style="width:60px" size="5" value="height" placeholder="180" step="any"><br><br>

<label>Weight kg:</label>
<input type="number" name="weight"  style="width:60px" size="5" value="weight" placeholder="80" step="any"><br><br>

<label>Sex:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="sex" value="Male"><label>male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="sex" value="female"><label>female</label><br><br>

<label>Are you active on a daily basis?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="dailybasis" value="yes"><label>yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="dailybasis" value="no"><label>no</label><br><br>

<label>Are you Pregnant?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="pregnant" value="N/A"><label>N/A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="pregnant" value="yes"><label>yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="pregnant" value="no"><label>no</label><br><br>

<h2>Part 3. Occupation and Lifestyle</h2>

<label>What do you do for a living?</label>
<input type="text"  name="" size="50" value="" placeholder=" "><br><br>

<label>Were you referred to us by one of our clients?</label>
<input type="radio" class="form-radio" name="" value="yes"><label>yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="" value="no"><label>no</label><br><br>

<label>If YES, please help us reward them:</label>
&nbsp;&nbsp;&nbsp;&nbsp;<label>First Name:</label>
<input type="text" name="fname"  size="10" value="" >&nbsp;&nbsp;<label>Last Name:</label><input type="text" name="lname"  size="10" value="" ><br><br>

<h2>Part 4. Medical History</h2>
<label>Have you ever suffered from...?</label><br><input type="checkbox" name="medicalhistory" value="Asthma"><label>Asthma</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="medicalhistory" value="High or Low Blood Pressure"><label>High or Low Blood Pressure</label><br>&nbsp;&nbsp;<input type="checkbox" name="medicalhistory" value="Epilepsy"><label>Epilepsy</label><br>&nbsp;&nbsp;<input type="checkbox" name="medicalhistory" value="Diabetes"><label>Diabetes</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="medicalhistory" value="Frequent Colds"><label>Frequent Colds</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="medicalhistory" value="Dizziness or Fainting"><label>Dizziness or Fainting</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="medicalhistory" value="Heart Disease"><label>Heart Disease</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="medicalhistory" value="Shortness of breath"><label>Shortness of breath</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="medicalhistory" value="High Cholesterol"><label>High Cholesterol</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="medicalhistory" value="Headaches or Migraines"><label>Headaches or Migraines</label><br><input type="checkbox" name="medicalhistory" value="NONE"><label>NONE</label><br><br>

<label>Have any of your first degree relatives experienced the following conditions?</label><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value="Heart Attack"><label>Heart Attack</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value="High Cholesterol"><label>High Cholesterol</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value="Epilepsy"><label>High Blood Pressure</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value="Diabetes"><label>Congenital Heart Disease</label><br>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value="Frequent Colds"><label>Diabetes</label><br><input type="checkbox" name="" value="Dizziness or Fainting"><label>NONE</label><br><br>

<label>Have you had surgery in the last two years?</label>
<input type="radio" class="form-radio" name="hadsurgery" value="yes"><label>yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="hadsurgery"" value="no"><label>no</label><br><br>

<label>If YES, Details...</label><br>
<textarea  name="" cols="50" rows="2" ></textarea><br><br>

<label>Do you suffer from back pain?</label>
<input type="radio" class="form-radio" name="backpain" value="yes"><label>yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="backpain" value="no"><label>no</label><br><br>

<label>If YES, Details...</label><br>
<textarea  name="" cols="50" rows="2" ></textarea><br><br>

<label>Do you have any injuries?</label>
<input type="radio" class="form-radio" name="injury" value="yes"><label>yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="injury" value="no"><label>no</label><br><br>

<label>If YES, Details...</label><br>
<textarea  name="" cols="50" rows="2" ></textarea><br><br>

<label>Do you take any...?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="anytake" value="Medications"><label>Medications</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="anytake" value="Supplements"><label>Supplements</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="anytake" value="NONE"><label>NONE</label><br><br>

<label>If YES, please list...</label><br>
<textarea  name="" cols="50" rows="2" ></textarea><br><br>

<label>When, where in the best shape of your life?</label>
<select name="bestshape" style="width:100px"><option value="bestshape"> </option><option value="2021"> 2021 </option><option value="2020"> 2020 </option><option value="2019"> 2019 </option><option value="2018"> 2018 </option><option value="2017"> 2017 </option><option value="2016"> 2016 </option><option value="2015"> 2015 </option><option value="2014"> 2014 </option><option value="2013"> 2013 </option><option value="2012"> 2012 </option><option value="2011"> 2011 </option><option value="2010"> 2010 </option><option value="2009"> 2009 </option><option value="2008"> 2008 </option><option value="2007"> 2007 </option><option value="2006"> 2006 </option><option value="2005"> 2005 </option><option value="2004"> 2004 </option><option value="2003"> 2003 </option><option value="2002"> 2002 </option><option value="2001"> 2001 </option><option value="2000"> 2000 </option><option value="1999"> 1999 </option><option value="1998"> 1998 </option><option value="1997"> 1997 </option><option value="1996"> 1996 </option><option value="1995"> 1995 </option><option value="1994"> 1994 </option><option value="1993"> 1993 </option><option value="1992"> 1992 </option><option value="1991"> 1991 </option><option value="1990"> 1990 </option><option value="1989"> 1989 </option><option value="1988"> 1988 </option><option value="1987"> 1987 </option><option value="1986"> 1986 </option><option value="1985"> 1985 </option><option value="1984"> 1984 </option><option value="1983"> 1983 </option><option value="1982"> 1982 </option><option value="1981"> 1981 </option><option value="1980"> 1980 </option><option value="1979"> 1979 </option><option value="1978"> 1978 </option><option value="1977"> 1977 </option><option value="1976"> 1976 </option><option value="1975"> 1975 </option><option value="1974"> 1974 </option><option value="1973"> 1973 </option><option value="1972"> 1972 </option><option value="1971"> 1971 </option><option value="1970"> 1970 </option><option value="1969"> 1969 </option><option value="1968"> 1968 </option><option value="1967"> 1967 </option><option value="1966"> 1966 </option><option value="1965"> 1965 </option><option value="1964"> 1964 </option><option value="1963"> 1963 </option><option value="1962"> 1962 </option><option value="1961"> 1961 </option><option value="1960"> 1960 </option><option value="1959"> 1959 </option><option value="1958"> 1958 </option><option value="1957"> 1957 </option><option value="1956"> 1956 </option><option value="1955"> 1955 </option><option value="1954"> 1954 </option><option value="1953"> 1953 </option><option value="1952"> 1952 </option><option value="1951"> 1951 </option><option value="1950"> 1950 </option><option value="1949"> 1949 </option><option value="1948"> 1948 </option><option value="1947"> 1947 </option><option value="1946"> 1946 </option><option value="1945"> 1945 </option><option value="1944"> 1944 </option><option value="1943"> 1943 </option><option value="1942"> 1942 </option><option value="1941"> 1941 </option><option value="1940"> 1940 </option><option value="1939"> 1939 </option><option value="1938"> 1938 </option><option value="1937"> 1937 </option><option value="1936"> 1936 </option><option value="1935"> 1935 </option><option value="1934"> 1934 </option><option value="1933"> 1933 </option><option value="1932"> 1932 </option><option value="1931"> 1931 </option><option value="1930"> 1930 </option><option value="1929"> 1929 </option><option value="1928"> 1928 </option><option value="1927"> 1927 </option><option value="1926"> 1926 </option><option value="1925"> 1925 </option><option value="1924"> 1924 </option><option value="1923"> 1923 </option><option value="1922"> 1922 </option><option value="1921"> 1921 </option></select><br><br>

<label>What where you doing? Whats different now?</label><br>
<textarea  name="" cols="80" rows="2"></textarea><br><br>

<label>How would you rate your current physical fitness?</label><br>
<table border="0" width="400">
<tr>
	<th>&nbsp;</th>
	<th>1</th>
	<th>2</th>
	<th>3</th>
	<th>4</th>
	<th>5</th>
	<th>6</th>
	<th>7</th>
	<th>8</th>
	<th>9</th>
	<th>10</th>
	<th></th>
</tr>
<tr>
	<td>poor</td>
	<td><input type="radio" name="rateus" value="1" title="1"></td>
	<td><input type="radio" name="rateus" value="2" title="2"></td>
	<td><input type="radio" name="rateus" value="3" title="3"></td>
	<td><input type="radio" name="rateus" value="4" title="4"></td>
	<td><input type="radio" name="rateus" value="5" title="5"></td>
	<td><input type="radio" name="rateus" value="6" title="6"></td>
	<td><input type="radio" name="rateus" value="7" title="7"></td>
	<td><input type="radio" name="rateus" value="8" title="8"></td>
	<td><input type="radio" name="rateus" value="9" title="9"></td>
	<td><input type="radio" name="rateus" value="10" title="10"></td>
	<td>Athlete</td>
</tr>
</table><br><br>

<h2>Part 5. Your Nutrition Habbits</h2>
<label>How would you describe your nutritional habits?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="nutrition" value="Bad"><label>Bad</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="nutrition" value="Goog"><label>Good</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="nutrition" value="Optimal"><label>Optimal</label><br><br>

<label>Have you ever suffered from any of the following?</label><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value="Digestive Problems"><label>Digestive Problems (IBS, Bloating etc)</label><br>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value="Allergies"><label>Allergies</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value="Kidney Problems"><label>Kidney Problems</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value="Food Intolerances"><label>Food Intolerances</label><br><input type="checkbox" name="" value="NONE"><label>NONE</label><br><br>

<h2>Terms And Conditions</h2>
<h5>1. ALL THE INFORMATION I HAVE GIVEN IS CORRECT</h5>
<p>All the information on this form is correct and to the best of my knowledge.<br>I have sought and followed any necessary medical advice. <br>I understand that all the information given will be kept confidential.</p><br><br>

<label>I AGREE to the above terms and conditions.</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="agreement" value="yes"><label>yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" name="agreement" value="no"><label>no</label><br><br>

<button type="submit" name="submit" value="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="reset">Clear Form</button><br><br>

<script>
var con=alert("Hello Patient! Feel Free and provide all information becouse provided information helps us to examine the patient, do laboratory investigations that help us to reach on final disease.   Thank you!. ");
</script>

</form></center>
 </body>
</html>
