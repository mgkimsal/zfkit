<?php /*
                   .______.
_______   ____   __| _/\_ |__   ____ _____    ____
\_  __ \_/ __ \ / __ |  | __ \_/ __ \\__  \  /    \
 |  | \/\  ___
 |__|    \___  >____ |  |___  /\___  >____  /___|  /
             \/     \/      \/     \/     \/     \/
RedBean Database Objects -
Written by Gabor de Mooij (c) copyright 2009-2011
RedBean is DUAL Licensed BSD and GPLv2. You may choose the license that fits
best for your project.
BSD/GPLv2 License
Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
* Redistributions of source code must retain the above copyright
notice, this list of conditions and the following disclaimer.
* Redistributions in binary form must reproduce the above copyright
notice, this list of conditions and the following disclaimer in the
documentation and/or other materials provided with the distribution.
* Neither the name of RedBeanPHP nor the
names of its contributors may be used to endorse or promote products
derived from this software without specific prior written permission.
THIS SOFTWARE IS PROVIDED BY GABOR DE MOOIJ ''AS IS'' AND ANY
EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL GABOR DE MOOIJ BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
RedBeanPHP is Written by Gabor de Mooij (G.J.G.T de Mooij) Copyright (c) 2011.
GPLv2 LICENSE
        GNU GENERAL PUBLIC LICENSE
           Version 2, June 1991
 Copyright (C) 1989, 1991 Free Software Foundation, Inc.
 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 Everyone is permitted to copy and distribute verbatim copies
 of this license document, but changing it is not allowed.
          Preamble
  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation's software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Lesser General Public License instead.)  You can apply it to
your programs, too.
  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.
  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.
  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.
  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.
  Also, for each author's protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors' reputations.
  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone's free use or not licensed at all.
  The precise terms and conditions for copying, distribution and
modification follow.
        GNU GENERAL PUBLIC LICENSE
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".
Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.
  1. You may copy and distribute verbatim copies of the Program's
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.
You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.
  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:
    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.
    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.
    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)
These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.
Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.
In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.
  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:
    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,
    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,
    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)
The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.
If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.
  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.
  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.
  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.
  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.
If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.
It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.
This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.
  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.
  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.
Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.
  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.
          NO WARRANTY
  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.
  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.
*/

/**
 * Interface for database drivers
 *
 * @file			RedBean/Driver.php
 * @description		Describes the API for database classes
 *					The Driver API conforms to the ADODB pseudo standard
 *					for database drivers.
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
interface RedBean_Driver {
	/**
	 * Implements Singleton (or multiton)
	 * Requests an instance of the database
	 * Returns an instance of the driver Driver wrapper.
	 *
	 * @param string $dsn    Database connection string
	 * @param string $user   DB account to be used
	 * @param string $pass   password
	 * @param string $dbname name of the database you
	 *
	 * @return RedBean_Driver $driver	  driver wrapper instance
	 */
	public static function getInstance( $host, $user, $pass );
	/**
	 * Runs a query and fetches results as a multi dimensional array.
	 *
	 * @param  string $sql SQL to be executed
	 *
	 * @return array $results result
	 */
	public function GetAll( $sql, $aValues=array() );
	/**
	 * Runs a query and fetches results as a column.
	 *
	 * @param  string $sql SQL Code to execute
	 *
	 * @return array	$results Resultset
	 */
	public function GetCol( $sql, $aValues=array() );
	/**
	 * Runs a query an returns results as a single cell.
	 *
	 * @param string $sql SQL to execute
	 *
	 * @return mixed $cellvalue result cell
	 */
	public function GetCell( $sql, $aValues=array() );
	/**
	 * Runs a query and returns a flat array containing the values of
	 * one row.
	 *
	 * @param string $sql SQL to execute
	 *
	 * @return array $row result row
	 */
	public function GetRow( $sql, $aValues=array() );
	/**
	 * Executes SQL code and allows key-value binding.
	 * This function allows you to provide an array with values to bind
	 * to query parameters. For instance you can bind values to question
	 * marks in the query. Each value in the array corresponds to the
	 * question mark in the query that matches the position of the value in the
	 * array. You can also bind values using explicit keys, for instance
	 * array(":key"=>123) will bind the integer 123 to the key :key in the
	 * SQL. This method has no return value.
	 *
	 * @param string $sql	  SQL Code to execute
	 * @param array  $aValues Values to bind to SQL query
	 *
	 * @return void
	 */
	public function Execute( $sql, $aValues=array() );
	/**
	 * Escapes a string for use in SQL using the currently selected
	 * driver driver.
	 *
	 * @param string $string string to be escaped
	 *
	 * @return string $string escaped string
	 */
	public function Escape( $str );
	/**
	 * Returns the latest insert ID if driver does support this
	 * feature.
	 *
	 * @return integer $id primary key ID
	 */
	public function GetInsertID();
	/**
	 * Returns the number of rows affected by the most recent query
	 * if the currently selected driver driver supports this feature.
	 *
	 * @return integer $numOfRows number of rows affected
	 */
	public function Affected_Rows();
	/**
	 * Toggles debug mode. In debug mode the driver will print all
	 * SQL to the screen together with some information about the
	 * results. All SQL code that passes through the driver will be
	 * passes on to the screen for inspection.
	 * This method has no return value.
	 *
	 * @param boolean $trueFalse turn on/off
	 *
	 * @return void
	 */
	public function setDebugMode( $tf );
	/**
	 * Starts a transaction.
	 * This method is part of the transaction mechanism of
	 * RedBeanPHP. All queries in a transaction are executed together.
	 * In case of an error all commands will be rolled back so none of the
	 * SQL in the transaction will affect the DB. Using transactions is
	 * considered best practice.
	 * This method has no return value.
	 *
	 * @return void
	 */
	public function CommitTrans();
	/**
	 * Commits a transaction.
	 * This method is part of the transaction mechanism of
	 * RedBeanPHP. All queries in a transaction are executed together.
	 * In case of an error all commands will be rolled back so none of the
	 * SQL in the transaction will affect the DB. Using transactions is
	 * considered best practice.
	 * This method has no return value.
	 *
	 * @return void
	 */
	public function StartTrans();
	/**
	 * Rolls back a transaction.
	 * This method is part of the transaction mechanism of
	 * RedBeanPHP. All queries in a transaction are executed together.
	 * In case of an error all commands will be rolled back so none of the
	 * SQL in the transaction will affect the DB. Using transactions is
	 * considered best practice.
	 * This method has no return value.
	 *
	 * @return void
	 */
	public function FailTrans();
}

/**
 * PDO Driver
 * @file				RedBean/PDO.php
 * @description	PDO Driver
 *						This Driver implements the RedBean Driver API
 * @author			Desfrenes
 * @license			BSD
 *
 *
 * (c) Desfrenes & Gabor de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 *
 */
class RedBean_Driver_PDO implements RedBean_Driver {
	/**
	 * @var string
	 * Contains database DSN for connecting to database.
	 */
	private $dsn;
	/**
	 * @var RedBean_Driver_PDO
	 * Holds the instance of this class.
	 */
	private static $instance;
	/**
	 * @var boolean
	 * Whether we are in debugging mode or not.
	 */
	private $debug = false;
	/**
	 * @var PDO
	 * Holds the PDO instance.
	 */
	private $pdo;
	/**
	 * @var integer
	 * Holds integer number of affected rows from latest query
	 * if driver supports this feature.
	 */
	private $affected_rows;
	/**
	 * @var resource
	 * Holds result resource.
	 */
	private $rs;
	/**
	 * @var boolean
	 * Flag, indicates whether SQL execution has taken place.
	 */
	private $exc =0;
	/**
	 * @var array
	 * Contains arbitrary connection data.
	 *
	 */
	private $connectInfo = array();
	/**
	 * @var bool
	 * Whether you want to use classic String Only binding -
	 * backward compatibility.
	 */
	public $flagUseStringOnlyBinding = false;
	/**
	 *
	 * @var boolean
	 *
	 * Whether we are currently connected or not.
	 * This flag is being used to delay the connection until necessary.
	 * Delaying connections is a good practice to speed up scripts that
	 * don't need database connectivity but for some reason want to
	 * init RedbeanPHP.
	 */
	private $isConnected = false;
	/**
	 * Returns an instance of the PDO Driver.
	 *
	 * @param string $dsn    Database connection string
	 * @param string $user   DB account to be used
	 * @param string $pass   password
	 *
	 * @return RedBean_Driver_PDO $pdo	  PDO wrapper instance
	 */
	public static function getInstance($dsn, $user, $pass) {
		if(is_null(self::$instance)) {
			self::$instance = new RedBean_Driver_PDO($dsn, $user, $pass);
		}
		return self::$instance;
	}
	/**
	 * Constructor. You may either specify dsn, user and password or
	 * just give an existing PDO connection.
	 * Examples:
	 *    $driver = new RedBean_Driver_PDO($dsn, $user, $password);
	 *    $driver = new RedBean_Driver_PDO($existingConnection);
	 *
	 * @param string|PDO  $dsn	 database connection string
	 * @param string      $user optional
	 * @param string      $pass optional
	 *
	 * @return void
	 */
	public function __construct($dsn, $user = NULL, $pass = NULL) {
		if ($dsn instanceof PDO) {
			$this->pdo = $dsn;
			$this->isConnected = true;
			$this->pdo->setAttribute(1002, 'SET NAMES utf8');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			
			$this->dsn = $this->getDatabaseType();
		} else {
			$this->dsn = $dsn;
			$this->connectInfo = array( "pass"=>$pass, "user"=>$user );
		}
	}
	/**
	 * Establishes a connection to the database using PHP PDO
	 * functionality. If a connection has already been established this
	 * method will simply return directly. This method also turns on
	 * UTF8 for the database and PDO-ERRMODE-EXCEPTION as well as
	 * PDO-FETCH-ASSOC.
	 *
	 * @return void
	 */
	public function connect() {
		if ($this->isConnected) return;
		$user = $this->connectInfo["user"];
		$pass = $this->connectInfo["pass"];
		
		$this->pdo = new PDO(
				  $this->dsn,
				  $user,
				  $pass,
				  array(1002 => 'SET NAMES utf8',
							 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
							 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				  )
		);
		$this->pdo->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, TRUE);
		$this->isConnected = true;
	}
	/**
	 * Binds parameters. This method binds parameters to a PDOStatement for
	 * Query Execution. This method binds parameters as NULL, INTEGER or STRING
	 * and supports both named keys and question mark keys.
	 *
	 * @param  PDOStatement $s       PDO Statement instance
	 * @param  array        $aValues values that need to get bound to the statement
	 *
	 * @return void
	 */
	protected function bindParams($s,$aValues) {
		foreach($aValues as $key=>&$value) {
			if (is_integer($key)) {
				if (is_null($value)){
					$s->bindValue($key+1,null,PDO::PARAM_NULL);
				}elseif (!$this->flagUseStringOnlyBinding && RedBean_QueryWriter_AQueryWriter::canBeTreatedAsInt($value) && $value < 2147483648) {
					$s->bindParam($key+1,$value,PDO::PARAM_INT);
				}
				else {
					$s->bindParam($key+1,$value,PDO::PARAM_STR);
				}
			}
			else {
				if (is_null($value)){
					$s->bindValue($key,null,PDO::PARAM_NULL);
				}
				elseif (!$this->flagUseStringOnlyBinding && RedBean_QueryWriter_AQueryWriter::canBeTreatedAsInt($value) &&  $value < 2147483648) {
					$s->bindParam($key,$value,PDO::PARAM_INT);
				}
				else {
					$s->bindParam($key,$value,PDO::PARAM_STR);
				}
			}
		}
	}
	/**
	 * Runs a query and fetches results as a multi dimensional array.
	 *
	 * @param  string $sql SQL to be executed
	 *
	 * @return array $results result
	 */
	public function GetAll( $sql, $aValues=array() ) {
		$this->connect();
		if ($this->debug) {
			echo "<HR>" . $sql.print_r($aValues,1);
		}
		try {
			if (strpos("pgsql",$this->dsn)===0) {
				$s = $this->pdo->prepare($sql, array(PDO::PGSQL_ATTR_DISABLE_NATIVE_PREPARED_STATEMENT => true));
			}
			else {
				$s = $this->pdo->prepare($sql);
			}
			$this->bindParams( $s, $aValues );
			$s->execute();
			$this->affected_rows=$s->rowCount();
		  	if ($s->columnCount()) {
		    	$this->rs = $s->fetchAll();
	    	}
		  	else {
		    	$this->rs = null;
		  	}
			$rows = $this->rs;
		}catch(PDOException $e) {
			
			
			if (version_compare(PHP_VERSION, '5.3.0', '<')) {
				$x = new RedBean_Exception_SQL( $e->getMessage(), 0);
			}
			else {
				$x = new RedBean_Exception_SQL( $e->getMessage(), 0, $e );
			}
			$x->setSQLState( $e->getCode() );
			throw $x;
		}
		if(!$rows) {
			$rows = array();
		}
		if ($this->debug) {
			if (count($rows) > 0) {
				echo "<br><b style='color:green'>resultset: " . count($rows) . " rows</b>";
			}
		}
		return $rows;
	}
	 /**
	 * Runs a query and fetches results as a column.
	 *
	 * @param  string $sql SQL Code to execute
	 *
	 * @return array	$results Resultset
	 */
	public function GetCol($sql, $aValues=array()) {
		$this->connect();
		$rows = $this->GetAll($sql,$aValues);
		$cols = array();
		if ($rows && is_array($rows) && count($rows)>0) {
			foreach ($rows as $row) {
				$cols[] = array_shift($row);
			}
		}
		return $cols;
	}
	/**
	 * Runs a query an returns results as a single cell.
	 *
	 * @param string $sql SQL to execute
	 *
	 * @return mixed $cellvalue result cell
	 */
	public function GetCell($sql, $aValues=array()) {
		$this->connect();
		$arr = $this->GetAll($sql,$aValues);
		$row1 = array_shift($arr);
		$col1 = array_shift($row1);
		return $col1;
	}
	/**
	 * Runs a query and returns a flat array containing the values of
	 * one row.
	 *
	 * @param string $sql SQL to execute
	 *
	 * @return array $row result row
	 */
	public function GetRow($sql, $aValues=array()) {
		$this->connect();
		$arr = $this->GetAll($sql, $aValues);
		return array_shift($arr);
	}
	
	/**
	 * Executes SQL code and allows key-value binding.
	 * This function allows you to provide an array with values to bind
	 * to query parameters. For instance you can bind values to question
	 * marks in the query. Each value in the array corresponds to the
	 * question mark in the query that matches the position of the value in the
	 * array. You can also bind values using explicit keys, for instance
	 * array(":key"=>123) will bind the integer 123 to the key :key in the
	 * SQL. This method has no return value.
	 *
	 * @param string $sql	  SQL Code to execute
	 * @param array  $aValues Values to bind to SQL query
	 *
	 * @return void
	 */
	public function Execute( $sql, $aValues=array() ) {
		$this->connect();
		if ($this->debug) {
			echo "<HR>" . $sql.print_r($aValues,1);
		}
		try {
			if (strpos("pgsql",$this->dsn)===0) {
				$s = $this->pdo->prepare($sql, array(PDO::PGSQL_ATTR_DISABLE_NATIVE_PREPARED_STATEMENT => true));
			}
			else {
				$s = $this->pdo->prepare($sql);
			}
			$this->bindParams( $s, $aValues );
			$s->execute();
			$this->affected_rows=$s->rowCount();
			return $this->affected_rows;
		}
		catch(PDOException $e) {
			
			
			if (version_compare(PHP_VERSION, '5.3.0', '<')) {
				$x = new RedBean_Exception_SQL( $e->getMessage(), 0);
			}
			else {
				$x = new RedBean_Exception_SQL( $e->getMessage()." SQL:".$sql, 0, $e );
			}
			$x->setSQLState( $e->getCode() );
			throw $x;
		}
	}
	/**
	 * Escapes a string for use in SQL using the currently selected
	 * PDO driver.
	 *
	 * @param string $string string to be escaped
	 *
	 * @return string $string escaped string
	 */
	public function Escape( $str ) {
		$this->connect();
		return substr(substr($this->pdo->quote($str), 1), 0, -1);
	}
	/**
	 * Returns the latest insert ID if driver does support this
	 * feature.
	 *
	 * @return integer $id primary key ID
	 */
	public function GetInsertID() {
		$this->connect();
		return (int) $this->pdo->lastInsertId();
	}
	/**
	 * Returns the number of rows affected by the most recent query
	 * if the currently selected PDO driver supports this feature.
	 *
	 * @return integer $numOfRows number of rows affected
	 */
	public function Affected_Rows() {
		$this->connect();
		return (int) $this->affected_rows;
	}
	/**
	 * Toggles debug mode. In debug mode the driver will print all
	 * SQL to the screen together with some information about the
	 * results. All SQL code that passes through the driver will be
	 * passes on to the screen for inspection.
	 * This method has no return value.
	 *
	 * @param boolean $trueFalse turn on/off
	 *
	 * @return void
	 */
	public function setDebugMode( $tf ) {
		$this->connect();
		$this->debug = (bool)$tf;
	}
	/**
	 * Starts a transaction.
	 * This method is part of the transaction mechanism of
	 * RedBeanPHP. All queries in a transaction are executed together.
	 * In case of an error all commands will be rolled back so none of the
	 * SQL in the transaction will affect the DB. Using transactions is
	 * considered best practice.
	 * This method has no return value.
	 *
	 * @return void
	 */
	public function StartTrans() {
		$this->connect();
		$this->pdo->beginTransaction();
	}
	/**
	 * Commits a transaction.
	 * This method is part of the transaction mechanism of
	 * RedBeanPHP. All queries in a transaction are executed together.
	 * In case of an error all commands will be rolled back so none of the
	 * SQL in the transaction will affect the DB. Using transactions is
	 * considered best practice.
	 * This method has no return value.
	 *
	 * @return void
	 */
	public function CommitTrans() {
		$this->connect();
		$this->pdo->commit();
	}
	/**
	 * Rolls back a transaction.
	 * This method is part of the transaction mechanism of
	 * RedBeanPHP. All queries in a transaction are executed together.
	 * In case of an error all commands will be rolled back so none of the
	 * SQL in the transaction will affect the DB. Using transactions is
	 * considered best practice.
	 * This method has no return value.
	 *
	 * @return void
	 */
	public function FailTrans() {
		$this->connect();
		$this->pdo->rollback();
	}
	/**
	 * Returns the name of the database type/brand: i.e. mysql, db2 etc.
	 *
	 * @return string $typeName database identification
	 */
	public function getDatabaseType() {
		$this->connect();
		return $this->pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
	}
	/**
	 * Returns the version number of the database.
	 *
	 * @return mixed $version version number of the database
	 */
	public function getDatabaseVersion() {
		$this->connect();
		return $this->pdo->getAttribute(PDO::ATTR_CLIENT_VERSION);
	}
	/**
	 * Returns the underlying PHP PDO instance.
	 *
	 * @return PDO $pdo PDO instance used by PDO wrapper
	 */
	public function getPDO() {
		$this->connect();
		return $this->pdo;
	}
}

/**
 * RedBean_OODBBean (Object Oriented DataBase Bean)
 * @file 		RedBean/RedBean_OODBBean.php
 * @description		The Bean class used for passing information
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_OODBBean implements IteratorAggregate, ArrayAccess {
    /**
     * Reference to NULL property for magic getter.
     *
     * @var Null $null
     */
    private $null = null;
	/**
	 * Properties of the bean. These are kept in a private
	 * array called properties and exposed through the array interface.
	 *
	 * @var array $properties
	 */
	private $properties = array();
	/**
	 * Meta Data storage. This is the internal property where all
	 * Meta information gets stored.
	 *
	 * @var array
	 */
	private $__info = NULL;
	/**
	 * Contains a BeanHelper to access service objects like
	 * te association manager and OODB.
	 *
	 * @var RedBean_BeanHelper
	 */
	private $beanHelper = NULL;
	/**
	 * Contains the latest Fetch Type.
	 * A Fetch Type is a preferred type for the next nested bean.
	 *
	 * @var null
	 */
	public static $fetchType = NULL;
	/**
	 * Sets the Bean Helper. Normally the Bean Helper is set by OODB.
	 * Here you can change the Bean Helper. The Bean Helper is an object
	 * providing access to a toolbox for the bean necessary to retrieve
	 * nested beans (bean lists: ownBean,sharedBean) without the need to
	 * rely on static calls to the facade (or make this class dep. on OODB).
	 *
	 * @param RedBean_IBeanHelper $helper
	 * @return void
	 */
	public function setBeanHelper(RedBean_IBeanHelper $helper) {
		$this->beanHelper = $helper;
	}
	/**
	 * Returns an ArrayIterator so you can treat the bean like
	 * an array with the properties container as its contents.
	 *
	 * @return ArrayIterator $arrayIt an array iterator instance with $properties
	 */
	public function getIterator() {
		return new ArrayIterator($this->properties);
	}
	/**
	 * Imports all values in associative array $array. Every key is used
	 * for a property and every value will be assigned to the property
	 * identified by the key. So basically this method converts the
	 * associative array to a bean by loading the array. You can filter
	 * the values using the $selection parameter. If $selection is boolean
	 * false, no filtering will be applied. If $selection is an array
	 * only the properties specified (as values) in the $selection
	 * array will be taken into account. To skip a property, omit it from
	 * the $selection array. Also, instead of providing an array you may
	 * pass a comma separated list of property names. This method is
	 * chainable because it returns its own object.
	 * Imports data into bean
	 *
	 * @param array        $array     what you want to import
	 * @param string|array $selection selection of values
	 * @param boolean      $notrim    if TRUE values will not be trimmed
	 *
	 *    @return RedBean_OODBBean $this
	 */
	public function import( $arr, $selection=false, $notrim=false ) {
		if (is_string($selection)) $selection = explode(",",$selection);
		
		if (!$notrim && is_array($selection)) foreach($selection as $k=>$s){ $selection[$k]=trim($s); }
		foreach($arr as $k=>$v) {
			if ($k != "__info") {
				if (!$selection || ($selection && in_array($k,$selection))) {
					$this->$k = $v;
				}
			}
		}
		return $this;
	}
	/**
	 * Exports the bean as an array.
	 * This function exports the contents of a bean to an array and returns
	 * the resulting array. If $meta eq uals boolean TRUE, then the array will
	 * also contain the __info section containing the meta data inside the
	 * RedBean_OODBBean Bean object.
	 * @param boolean $meta
	 * @return array $arr
	 */
	public function export($meta = false) {
		$arr = $this->properties;
		foreach($arr as $k=>$v) {
			if (is_array($v) || is_object($v)) unset($arr[$k]);
		}
		if ($meta) $arr["__info"] = $this->__info;
		return $arr;
	}
	/**
	 * Exports the bean to an object.
	 * This function exports the contents of a bean to an object.
	 * @param object $obj
	 * @return array $arr
	 */
	public function exportToObj($obj) {
		foreach($this->properties as $k=>$v) {
			if (!is_array($v) && !is_object($v))
			$obj->$k = $v;
		}
	}
	/**
	 * Implements isset() function for use as an array.
	 * Returns whether bean has an element with key
	 * named $property. Returns TRUE if such an element exists
	 * and FALSE otherwise.
	 * @param string $property
	 * @return boolean $hasProperty
	 */
	public function __isset( $property ) {
		return (isset($this->properties[$property]));
	}
	/**
	 * Returns the ID of the bean no matter what the ID field is.
	 *
	 * @return string $id record Identifier for bean
	 */
	public function getID() {
		$idfield = $this->getMeta("sys.idfield");
		return (string) $this->$idfield;
	}
	/**
	 * Unsets a property. This method will load the property first using
	 * __get.
	 *
	 * @param  string $property property
	 *
	 * @return void
	 */
	public function __unset($property) {
		$this->__get($property);
		$fieldLink = $property."_id";
		if (isset($this->$fieldLink)) {
			
			$this->$fieldLink = null;
			
		}
		if ((isset($this->properties[$property]))) {
			unset($this->properties[$property]);
		}
	}
	/**
	 * Removes a property from the properties list without invoking
	 * an __unset on the bean.
	 *
	 * @param  string $property property that needs to be unset
	 *
	 * @return void
	 */
	public function removeProperty( $property ) {
		unset($this->properties[$property]);
	}
	/**
	 * Magic Getter. Gets the value for a specific property in the bean.
	 * If the property does not exist this getter will make sure no error
	 * occurs. This is because RedBean allows you to query (probe) for
	 * properties. If the property can not be found this method will
	 * return NULL instead.
	 * @param string $property
	 * @return mixed $value
	 */
	public function &__get( $property ) {
		if ($this->beanHelper)
		$toolbox = $this->beanHelper->getToolbox();
		if (!isset($this->properties[$property])) {
			$fieldLink = $property."_id";
			/**
			 * All this magic can be become very complex quicly. For instance,
			 * my PHP CLI produced a segfault while testing this code. Turns out that
			 * if fieldlink equals idfield, scripts tend to recusrively load beans and
			 * instead of giving a clue they simply crash and burn isnt that nice?
			 */
			if (isset($this->$fieldLink) && $fieldLink != $this->getMeta('sys.idfield')) {
				$this->setMeta("tainted",true);
				$type =  $toolbox->getWriter()->getAlias($property);
				$targetType = $this->properties[$fieldLink];
				$bean =  $toolbox->getRedBean()->load($type,$targetType);
				
				$this->properties[$property] = $bean;
				return $this->properties[$property];
			}
			if (strpos($property,'own')===0) {
				$firstCharCode = ord(substr($property,3,1));
				if ($firstCharCode>=65 && $firstCharCode<=90) {
					$type = (lcfirst(str_replace('own','',$property)));
					$myFieldLink = $this->getMeta('type')."_id";
					$beans = $toolbox->getRedBean()->find($type,array(),array(" $myFieldLink = ? ",array($this->getID())));
					$this->properties[$property] = $beans;
					$this->setMeta("sys.shadow.".$property,$beans);
					$this->setMeta("tainted",true);
					return $this->properties[$property];
				}
			}
			if (strpos($property,'shared')===0) {
				$firstCharCode = ord(substr($property,6,1));
				if ($firstCharCode>=65 && $firstCharCode<=90) {
					$type = (lcfirst(str_replace('shared','',$property)));
					$keys = $toolbox->getRedBean()->getAssociationManager()->related($this,$type);
					if (!count($keys)) $beans = array(); else
					$beans = $toolbox->getRedBean()->batch($type,$keys);
					$this->properties[$property] = $beans;
					$this->setMeta("sys.shadow.".$property,$beans);
					$this->setMeta("tainted",true);
					return $this->properties[$property];
				}
			}
			return $this->null;
		}
		return $this->properties[$property];
	}
	/**
	 * Magic Setter. Sets the value for a specific property.
	 * This setter acts as a hook for OODB to mark beans as tainted.
	 * The tainted meta property can be retrieved using getMeta("tainted").
	 * The tainted meta property indicates whether a bean has been modified and
	 * can be used in various caching mechanisms.
	 * @param string $property
	 * @param  mixed $value
	 */
	public function __set( $property, $value ) {
		$this->__get($property);
		$this->setMeta("tainted",true);
		if ($value===false) {
			$value = "0";
		}
		if ($value===true) {
			$value = "1";
		}
		$this->properties[$property] = $value;
	}
	/**
	 * Returns the value of a meta property. A meta property
	 * contains extra information about the bean object that will not
	 * get stored in the database. Meta information is used to instruct
	 * RedBean as well as other systems how to deal with the bean.
	 * For instance: $bean->setMeta("buildcommand.unique.0", array(
	 * "column1", "column2", "column3") );
	 * Will add a UNIQUE constaint for the bean on columns: column1, column2 and
	 * column 3.
	 * To access a Meta property we use a dot separated notation.
	 * If the property cannot be found this getter will return NULL instead.
	 * @param string $path
	 * @param mixed $default
	 * @return mixed $value
	 */
	public function getMeta( $path, $default = NULL) {
		return (isset($this->__info[$path])) ? $this->__info[$path] : $default;
	}
	/**
	 * Stores a value in the specified Meta information property. $value contains
	 * the value you want to store in the Meta section of the bean and $path
	 * specifies the dot separated path to the property. For instance "my.meta.property".
	 * If "my" and "meta" do not exist they will be created automatically.
	 * @param string $path
	 * @param mixed $value
	 */
	public function setMeta( $path, $value ) {
		$this->__info[$path] = $value;
	}
	/**
	 * Copies the meta information of the specified bean
	 * This is a convenience method to enable you to
	 * exchange meta information easily.
	 * @param RedBean_OODBBean $bean
	 * @return RedBean_OODBBean
	 */
	public function copyMetaFrom( RedBean_OODBBean $bean ) {
		$this->__info = $bean->__info;
		return $this;
	}
	/**
	 * Sleep function fore serialize() call. This will be invoked if you
	 * perform a serialize() operation.
	 *
	 * @return mixed $array
	 */
	public function __sleep() {
		
		$this->setMeta("sys.oodb",null);
		return array('properties','__info');
	}
	/**
	 * Reroutes a call to Model if exists. (new fuse)
	 * @param string $method
	 * @param array $args
	 * @return mixed $mixed
	 */
	public function __call($method, $args) {
		if (!isset($this->__info["model"])) {
			
			$modelName = RedBean_ModelHelper::getModelName( $this->getMeta("type") );
			if (!class_exists($modelName)) return null;
			$obj = new $modelName();
			$obj->loadBean($this);
			$this->__info["model"] = $obj;
		}
		if (!method_exists($this->__info["model"],$method)) return null;
		return call_user_func_array(array($this->__info["model"],$method), $args);
	}
	/**
	 * Implementation of __toString Method
	 * Routes call to Model.
	 * @return string $string
	 */
	public function __toString() {
		$string = $this->__call('__toString',array());
		if ($string === null) {
			return json_encode($this->properties);
		}
		else {
			return $string;
		}
	}
	/**
	 * Implementation of Array Access Interface, you can access bean objects
	 * like an array.
	 * Call gets routed to __set.
	 *
	 * @param  mixed $offset offset string
	 * @param  mixed $value value
	 *
	 * @return void
	 */
	public function offsetSet($offset, $value) {
        $this->__set($offset, $value);
    }
	/**
	 * Implementation of Array Access Interface, you can access bean objects
	 * like an array.
	 *
	 * @param  mixed $offset property
	 *
	 * @return
	 */
    public function offsetExists($offset) {
        return isset($this->properties[$offset]);
    }
	/**
	 * Implementation of Array Access Interface, you can access bean objects
	 * like an array.
	 * Unsets a value from the array/bean.
	 *
	 * @param  mixed $offset property
	 *
	 * @return
	 */
    public function offsetUnset($offset) {
        unset($this->properties[$offset]);
    }
	/**
	 * Implementation of Array Access Interface, you can access bean objects
	 * like an array.
	 * Returns value of a property.
	 *
	 * @param  mixed $offset property
	 *
	 * @return
	 */
    public function offsetGet($offset) {
        return $this->__get($offset);
    }
	/**
	 * Chainable method to cast a certain ID to a bean; for instance:
	 * $person = $club->fetchAs('person')->member;
	 * This will load a bean of type person using member_id as ID.
	 *
	 * @param  string $type preferred fetch type
	 *
	 * @return RedBean_OODBBean
	 */
	public function fetchAs($type) {
		self::$fetchType = $type;
		return $this;
	}
}

/**
 * Observable
 * Base class for Observables
 * @file 		RedBean/Observable.php
 * @description		Part of the observer pattern in RedBean
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
abstract class RedBean_Observable {
	/**
	 *
	 * @var array
	 */
	private $observers = array();
	/**
	 * Implementation of the Observer Pattern.
	 * Adds a listener to this instance.
	 * This method can be used to attach an observer to an object.
	 * You can subscribe to a specific event by providing the ID
	 * of the event you are interested in. Once the event occurs
	 * the observable will notify the listeners by calling
	 * onEvent(); providing the event ID and either a bean or
	 * an information array.
	 *
	 * @param string           $eventname event
	 * @param RedBean_Observer $observer observer
	 *
	 * @return void
	 */
	public function addEventListener( $eventname, RedBean_Observer $observer ) {
		if (!isset($this->observers[ $eventname ])) {
			$this->observers[ $eventname ] = array();
		}
		foreach($this->observers[$eventname] as $o) if ($o==$observer) return;
		$this->observers[ $eventname ][] = $observer;
	}
	/**
	 * Implementation of the Observer Pattern.
	 * Sends an event (signal) to the registered listeners
	 * This method is provided by the abstract class Observable for
	 * convience. Observables can use this method to notify their
	 * observers by sending an event ID and information parameter.
	 *
	 * @param string $eventname eventname
	 * @param mixed  $info      info
	 * @return unknown_ty
	 */
	public function signal( $eventname, $info ) {
		if (!isset($this->observers[ $eventname ])) {
			$this->observers[ $eventname ] = array();
		}
		foreach($this->observers[$eventname] as $observer) {
			$observer->onEvent( $eventname, $info );
		}
	}
}
/**
 * Observer
 * @file 		RedBean/Observer.php
 * @description		Part of the observer pattern in RedBean
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
interface RedBean_Observer {
	/**
	 * Part of the RedBean Observer Infrastructure.
	 * The on-event method is called by an observable once the
	 * event the observer has been registered for occurs.
	 * Once the even occurs, the observable will signal the observer
	 * using this method, sending the event name and the bean or
	 * an information array.
	 *
	 * @param string $eventname
	 * @param RedBean_OODBBean mixed $info
	 */
	public function onEvent( $eventname, $bean );
}
/**
 * Adapter Interface
 *
 * @file 			RedBean/Adapter.php
 * @description		Describes the API for a RedBean Database Adapter.
 * @author			Gabor de Mooij
 * @license			BSD
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 *
 */
interface RedBean_Adapter {
	/**
	 * Returns the latest SQL statement
	 *
	 * @return string $SQLString SQLString
	 */
	public function getSQL();
	/**
	 * Escapes a value for usage in an SQL statement
	 *
	 * @param string $sqlvalue value
	 */
	public function escape( $sqlvalue );
	/**
	 * Executes an SQL Statement using an array of values to bind
	 * If $noevent is TRUE then this function will not signal its
	 * observers to notify about the SQL execution; this to prevent
	 * infinite recursion when using observers.
	 *
	 * @param string  $sql     SQL
	 * @param array   $aValues values
	 * @param boolean $noevent no event firing
	 */
	public function exec( $sql , $aValues=array(), $noevent=false);
	/**
	 * Executes an SQL Query and returns a resultset.
	 * This method returns a multi dimensional resultset similar to getAll
	 * The values array can be used to bind values to the place holders in the
	 * SQL query.
	 *
	 * @param string $sql     SQL
	 * @param array  $aValues values
	 */
	public function get( $sql, $aValues = array() );
	/**
	 * Executes an SQL Query and returns a resultset.
	 * This method returns a single row (one array) resultset.
	 * The values array can be used to bind values to the place holders in the
	 * SQL query.
	 *
	 * @param string $sql	  SQL
	 * @param array  $aValues values to bind
	 *
	 * @return array $aMultiDimArray row
	 */
	public function getRow( $sql, $aValues = array() );
	/**
	 * Executes an SQL Query and returns a resultset.
	 * This method returns a single column (one array) resultset.
	 * The values array can be used to bind values to the place holders in the
	 * SQL query.
	 *
	 * @param string $sql	  SQL
	 * @param array  $aValues values to bind
	 *
	 * @return array $aSingleDimArray column
	 */
	public function getCol( $sql, $aValues = array() );
	/**
	 * Executes an SQL Query and returns a resultset.
	 * This method returns a single cell, a scalar value as the resultset.
	 * The values array can be used to bind values to the place holders in the
	 * SQL query.
	 *
	 * @param string $sql     SQL
	 * @param array  $aValues values to bind
	 *
	 * @return string $sSingleValue value from cell
	 */
	public function getCell( $sql, $aValues = array() );
	/**
	 * Executes the SQL query specified in $sql and takes
	 * the first two columns of the resultset. This function transforms the
	 * resultset into an associative array. Values from the the first column will
	 * serve as keys while the values of the second column will be used as values.
	 * The values array can be used to bind values to the place holders in the
	 * SQL query.
	 *
	 * @param string $sql    SQL
	 * @param array  $values values to bind
	 *
	 * @return array $associativeArray associative array result set
	 */
	public function getAssoc( $sql, $values = array() );
	/**
	 * Returns the latest insert ID.
	 *
	 * @return integer $id primary key ID
	 */
	public function getInsertID();
	/**
	 * Returns the number of rows that have been
	 * affected by the last update statement.
	 *
	 * @return integer $count number of rows affected
	 */
	public function getAffectedRows();
	/**
	 * Returns the original database resource. This is useful if you want to
	 * perform operations on the driver directly instead of working with the
	 * adapter. RedBean will only access the adapter and never to talk
	 * directly to the driver though.
	 *
	 * @return object $driver driver
	 */
	public function getDatabase();
	
	/**
	 * This method is part of the RedBean Transaction Management
	 * mechanisms.
	 * Starts a transaction.
	 */
	public function startTransaction();
	/**
	 * This method is part of the RedBean Transaction Management
	 * mechanisms.
	 * Commits the transaction.
	 */
	public function commit();
	/**
	 * This method is part of the RedBean Transaction Management
	 * mechanisms.
	 * Rolls back the transaction.
	 */
	public function rollback();
}
/**
 * DBAdapter		(Database Adapter)
 * @file				RedBean/Adapter/DBAdapter.php
 * @description	An adapter class to connect various database systems to RedBean
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_Adapter_DBAdapter extends RedBean_Observable implements RedBean_Adapter {
	/**
	 * @var RedBean_Driver
	 *
	 * ADODB compatible class
	 */
	private $db = null;
	/**
	 * @var string
	 *
	 * Contains SQL snippet
	 */
	private $sql = "";
	/**
	 * Constructor.
	 * Creates an instance of the RedBean Adapter Class.
	 * This class provides an interface for RedBean to work
	 * with ADO compatible DB instances.
	 *
	 * @param RedBean_Driver $database ADO Compatible DB Instance
	 */
	public function __construct($database) {
		$this->db = $database;
	}
	/**
	 * Returns the latest SQL Statement.
	 *
	 * @return string $SQL latest SQL statement
	 */
	public function getSQL() {
		return $this->sql;
	}
	/**
	 * Escapes a string for use in a Query.
	 *
	 * @param  string $sqlvalue SQL value to escape
	 *
	 * @return string $escapedValue escaped value
	 */
	public function escape( $sqlvalue ) {
		return $this->db->Escape($sqlvalue);
	}
	/**
	 * Executes SQL code; any query without
	 * returning a resultset.
	 * This function allows you to provide an array with values to bind
	 * to query parameters. For instance you can bind values to question
	 * marks in the query. Each value in the array corresponds to the
	 * question mark in the query that matches the position of the value in the
	 * array. You can also bind values using explicit keys, for instance
	 * array(":key"=>123) will bind the integer 123 to the key :key in the
	 * SQL.
	 *
	 * @param  string  $sql			SQL Code to execute
	 * @param  array   $values		assoc. array binding values
	 * @param  boolean $noevent   if TRUE this will suppress the event 'sql_exec'
	 *
	 * @return mixed  $undefSet	whatever driver returns, undefined
	 */
	public function exec( $sql , $aValues=array(), $noevent=false) {
		if (!$noevent) {
			$this->sql = $sql;
			$this->signal("sql_exec", $this);
		}
		return $this->db->Execute( $sql, $aValues );
	}
	/**
	 * Multi array SQL fetch. Fetches a multi dimensional array.
	 * This function allows you to provide an array with values to bind
	 * to query parameters. For instance you can bind values to question
	 * marks in the query. Each value in the array corresponds to the
	 * question mark in the query that matches the position of the value in the
	 * array. You can also bind values using explicit keys, for instance
	 * array(":key"=>123) will bind the integer 123 to the key :key in the
	 * SQL.
	 *
	 * @param  string $sql		SQL code to execute
	 * @param  array  $values	assoc. array binding values
	 *
	 * @return array  $result	two dimensional array result set
	 */
	public function get( $sql, $aValues = array() ) {
		$this->sql = $sql;
		$this->signal("sql_exec", $this);
		return $this->db->GetAll( $sql,$aValues );
	}
	/**
	 * Executes SQL and fetches a single row.
	 * This function allows you to provide an array with values to bind
	 * to query parameters. For instance you can bind values to question
	 * marks in the query. Each value in the array corresponds to the
	 * question mark in the query that matches the position of the value in the
	 * array. You can also bind values using explicit keys, for instance
	 * array(":key"=>123) will bind the integer 123 to the key :key in the
	 * SQL.
	 *
	 * @param  string $sql		SQL code to execute
	 * @param  array  $values	assoc. array binding values
	 *
	 * @return array	$result	one dimensional array result set
	 */
	public function getRow( $sql, $aValues = array() ) {
		$this->sql = $sql;
		$this->signal("sql_exec", $this);
		return $this->db->GetRow( $sql,$aValues );
	}
	/**
	 * Executes SQL and returns a one dimensional array result set.
	 * This function rotates the result matrix to obtain a column result set.
	 * This function allows you to provide an array with values to bind
	 * to query parameters. For instance you can bind values to question
	 * marks in the query. Each value in the array corresponds to the
	 * question mark in the query that matches the position of the value in the
	 * array. You can also bind values using explicit keys, for instance
	 * array(":key"=>123) will bind the integer 123 to the key :key in the
	 * SQL.
	 *
	 * @param  string $sql		SQL code to execute
	 * @param  array  $values	assoc. array binding values
	 *
	 * @return array  $result	one dimensional array result set
	 */
	public function getCol( $sql, $aValues = array() ) {
		$this->sql = $sql;
		$this->signal("sql_exec", $this);
		return $this->db->GetCol( $sql,$aValues );
	}
	/**
	 * Executes an SQL Query and fetches the first two columns only.
	 * Then this function builds an associative array using the first
	 * column for the keys and the second result column for the
	 * values. For instance: SELECT id, name FROM... will produce
	 * an array like: id => name.
	 * This function allows you to provide an array with values to bind
	 * to query parameters. For instance you can bind values to question
	 * marks in the query. Each value in the array corresponds to the
	 * question mark in the query that matches the position of the value in the
	 * array. You can also bind values using explicit keys, for instance
	 * array(":key"=>123) will bind the integer 123 to the key :key in the
	 * SQL.
	 *
	 * @param  string $sql		SQL code to execute
	 * @param  array  $values	assoc. array binding values
	 *
	 * @return array  $result	multi dimensional assoc. array result set
	 */
	public function getAssoc( $sql, $aValues = array() ) {
		$this->sql = $sql;
		$this->signal("sql_exec", $this);
		$rows = $this->db->GetAll( $sql, $aValues );
		$assoc = array();
		if ($rows) {
			foreach($rows as $row) {
				if (count($row)>0) {
					$key = array_shift($row);
				}
				if (count($row)>0) {
					$value = array_shift($row);
				}
				else {
					$value = $key;
				}
				$assoc[ $key ] = $value;
			}
		}
		return $assoc;
	}
	/**
	 * Retrieves a single cell.
	 * This function allows you to provide an array with values to bind
	 * to query parameters. For instance you can bind values to question
	 * marks in the query. Each value in the array corresponds to the
	 * question mark in the query that matches the position of the value in the
	 * array. You can also bind values using explicit keys, for instance
	 * array(":key"=>123) will bind the integer 123 to the key :key in the
	 * SQL.
	 *
	 * @param  string $sql	  sql code to execute
	 * @param  array  $values assoc. array binding values
	 *
	 * @return array  $result scalar result set
	 */
	public function getCell( $sql, $aValues = array(), $noSignal = null ) {
		$this->sql = $sql;
		if (!$noSignal) $this->signal("sql_exec", $this);
		$arr = $this->db->getCol( $sql, $aValues );
		if ($arr && is_array($arr))	return ($arr[0]); else return false;
	}
	/**
	 * Returns latest insert id, most recently inserted id.
	 *
	 * @return integer $id latest insert ID
	 */
	public function getInsertID() {
		return $this->db->getInsertID();
	}
	/**
	 * Returns number of affected rows.
	 *
	 * @return integer $numOfAffectRows
	 */
	public function getAffectedRows() {
		return $this->db->Affected_Rows();
	}
	/**
	 * Unwrap the original database object.
	 *
	 * @return RedBean_Driver $database	returns the inner database object
	 */
	public function getDatabase() {
		return $this->db;
	}
	/**
	 * Transactions.
	 * Part of the transaction management infrastructure of RedBean.
	 * Starts a transaction.
	 */
	public function startTransaction() {
		return $this->db->StartTrans();
	}
	/**
	 * Transactions.
	 * Part of the transaction management infrastructure of RedBean.
	 * Commits a transaction.
	 */
	public function commit() {
		return $this->db->CommitTrans();
	}
	/**
	 * Transactions.
	 * Part of the transaction management infrastructure of RedBean.
	 * Rolls back transaction.
	 */
	public function rollback() {
		return $this->db->FailTrans();
	}
}

/**
 * QueryWriter
 * Interface for QueryWriters
 * @file			RedBean/QueryWriter.php
 * @description		Describes the API for a QueryWriter
 * @author			Gabor de Mooij
 * @license			BSD
 *
 * Notes:
 * - Whenever you see a parameter called $table or $type you should always
 * be aware of the fact that this argument contains a Bean Type string, not the
 * actual table name. These raw type names are passed to safeTable() to obtain the
 * actual name of the database table. Don't let the names confuse you $type/$table
 * refers to Bean Type, not physical database table names!
 * - This is the interface for FLUID database drivers. Drivers intended to support
 * just FROZEN mode should implement the IceWriter instead.
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
interface RedBean_QueryWriter {
	/**
	 * QueryWriter Constant Identifier.
	 * Identifies a situation in which a table has not been found in
	 * the database.
	 */
	const C_SQLSTATE_NO_SUCH_TABLE = 1;
	/**
	 * QueryWriter Constant Identifier.
	 * Identifies a situation in which a perticular column has not
	 * been found in the database.
	 */
	const C_SQLSTATE_NO_SUCH_COLUMN = 2;
	/**
	 * QueryWriter Constant Identifier.
	 * Identifies a situation in which a perticular column has not
	 * been found in the database.
	 */
	const C_SQLSTATE_INTEGRITY_CONSTRAINT_VIOLATION = 3;
	/**
	 * Returns the table to store beans of a given type.
	 *
	 * @param string $type type of bean you want the table name of
	 *
	 * @return string $tableName name of the table where bean records are stored
	 */
	public function getFormattedTableName($type);
	/**
	 * Returns the tables that are in the database.
	 *
	 * @return array $arrayOfTables list of tables
	 */
	public function getTables();
	/**
	 * This method should create a table for the bean.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string $type type of bean you want to create a table for
	 *
	 * @return void
	 */
	public function createTable($type);
	/**
	 * Returns an array containing all the columns of the specified type.
	 * The format of the return array looks like this:
	 * $field => $type where $field is the name of the column and $type
	 * is a database specific description of the datatype.
	 *
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string $type type of bean you want to obtain a column list of
	 *
	 * @return array $listOfColumns list of columns ($field=>$type)
	 */
	public function getColumns($type);
	/**
	 * Returns the Column Type Code (integer) that corresponds
	 * to the given value type. This method is used to determine the minimum
	 * column type required to represent the given value.
	 *
	 * @param string $value value
	 *
	 * @return integer $type type
	 */
	public function scanType($value, $alsoScanSpecialForTypes=false);
	/**
	 * This method should add a column to a table.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string  $type   name of the table
	 * @param string  $column name of the column
	 * @param integer $field  data type for field
	 *
	 * @return void
	 *
	 */
	public function addColumn($type, $column, $field);
	/**
	 * This method should return a data type constant based on the
	 * SQL type definition. This function is meant to compare column data
	 * type to check whether a column is wide enough to represent the desired
	 * values.
	 *
	 * @param integer $typedescription SQL type description from database
	 *
	 * @return integer $type
	 */
	public function code($typedescription);
	/**
	 * This method should widen the column to the specified data type.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string  $type       type / table that needs to be adjusted
	 * @param string  $column     column that needs to be altered
	 * @param integer $datatype   target data type
	 *
	 * @return void
	 */
	public function widenColumn($type, $column, $datatype);
	/**
	 * This method should update (or insert a record), it takes
	 * a table name, a list of update values ( $field => $value ) and an
	 * primary key ID (optional). If no primary key ID is provided, an
	 * INSERT will take place.
	 * Returns the new ID.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string  $type         name of the table to update
	 * @param array   $updatevalues list of update values
	 * @param integer $id			optional primary key ID value
	 *
	 * @return integer $id the primary key ID value of the new record
	 */
	public function updateRecord($type, $updatevalues, $id=null);
	/**
	 * This method should select a record. You should be able to provide a
	 * collection of conditions using the following format:
	 * array( $field1 => array($possibleValue1, $possibleValue2,... $possibleValueN ),
	 * ...$fieldN=>array(...));
	 * Also, additional SQL can be provided. This SQL snippet will be appended to the
	 * query string. If the $delete parameter is set to TRUE instead of selecting the
	 * records they will be deleted.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string  $type   type of bean to select records from
	 * @param array   $cond   conditions using the specified format
	 * @param string  $asql   additional sql
	 * @param boolean $delete  IF TRUE delete records (optional)
	 * @param boolean $inverse IF TRUE inverse the selection (optional)
	 *
	 * @return array $records selected records
	 */
	public function selectRecord($type, $conditions, $addSql = null, $delete = false, $inverse = false);
	/**
	 * This method should add a UNIQUE constraint index to a table on columns $columns.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string $type               type
	 * @param array  $columnsPartOfIndex columns to include in index
	 *
	 * @return void
	 */
	public function addUniqueIndex($type,$columns);
	/**
	 * Returns the property that contains the Primary Key ID in an
	 * OODBBean instance.
	 *
	 * @param string $tableOfTheBean
	 *
	 * @return void
	 */
	public function getIDField($type);
	/**
	 * This method should check whether the SQL state is in the list of specified states
	 * and returns true if it does appear in this list or false if it
	 * does not. The purpose of this method is to translate the database specific state to
	 * a one of the constants defined in this class and then check whether it is in the list
	 * of standard states provided.
	 *
	 * @param string $state sql state
	 * @param array  $list  list
	 *
	 * @return boolean $isInList
	 */
	public function sqlStateIn( $state, $list );
	/**
	 * This method should remove all beans of a certain type.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param  string $type bean type
	 *
	 * @return void
	 */
	public function wipe($type);
	/**
	 * This method should count the number of beans of the given type.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param  string $type type of bean to count
	 *
	 * @return integer $numOfBeans number of beans found
	 */
	public function count($type);
	/**
	 * This method should set the new bean formatter. A bean formatter is an instance
	 * of the class BeanFormatter that determines how a bean should be represented
	 * in the database.
	 *
	 * @param RedBean_IBeanFormatter $beanFormatter bean format
	 *
	 * @return void
	 */
	public function setBeanFormatter(RedBean_IBeanFormatter $beanFormatter);
	/**
	 * This method should create a view with name $viewID and
	 * based on the reference type. A list of types
	 * will be provided in the second argument. This method should create
	 * a view by joining each type in the list (using LEFT OUTER JOINS) to the
	 * reference type. If a type is mentioned multiple times it does not need
	 * to be re-joined but the next type should be joined to that type instead.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param  string $referenceType reference type
	 * @param  array  $constraints   list of types
	 * @param  string $viewID		 name of the new view
	 *
	 * @return void
	 */
	public function createView($referenceType, $types, $viewID);
	/**
	 * Given a field type const. from this class this method should
	 * return the database specific SQL description of the data type.
	 *
	 * @param integer $type data type constant
	 *
	 * @return void
	 */
	public function getFieldType($type = "");
	/**
	 * This method should filter a column name so that it can
	 * be used safely in a query for a specific database.
	 *
	 * @param  string $name		the column name
	 * @param  bool   $noQuotes whether you want to omit quotes
	 *
	 * @return string $clean the clean version of the column name
	 */
	public function safeColumn($name, $noQuotes = false);
	/**
	 * This method should filter a type name so that it can
	 * be used safely in a query for a specific database. It actually
	 * converts a type to a table. TYPE -> TABLE
	 *
	 * @param string $name     the name of the type
	 * @param bool   $noQuotes whether you want to omit quotes in table name
	 *
	 * @return string $tablename clean table name for use in query
	 */
	public function safeTable($name, $noQuotes = false);
	/**
	 * This method should add a constraint. If one of the beans gets trashed
	 * the other, related bean should be removed as well.
	 *
	 * @param RedBean_OODBBean $bean1      first bean
	 * @param RedBean_OODBBean $bean2      second bean
	 * @param bool 			   $dontCache  by default we use a cache, TRUE = NO CACHING (optional)
	 *
	 * @return void
	 */
	public function addConstraint( RedBean_OODBBean $bean1, RedBean_OODBBean $bean2, $dontCache = false );
	/**
	 * This method should return the format for link tables.
	 * Given an array containing two type names this method returns the
	 * name of the link table to be used to store and retrieve
	 * association records.
	 *
	 * @param  array $types two types array($type1,$type2)
	 *
	 * @return string $linktable name of the link table
	 */
	public function getAssocTableFormat($types);
	/**
	 * This method should add a foreign key from type and field to
	 * target type and target field.
	 * The foreign key is created without an action. On delete/update
	 * no action will be triggered. The FK is only used to allow database
	 * tools to generate pretty diagrams and to make it easy to add actions
	 * later on.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 *
	 * @param  string $type	       type that will have a foreign key field
	 * @param  string $targetType  points to this type
	 * @param  string $field       field that contains the foreign key value
	 * @param  string $targetField field where the fk points to
	 *
	 * @return void
	 */
	public function addFK( $type, $targetType, $field, $targetField);
	/**
	 * This method should add an index to a type and field with name
	 * $name.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param  $type   type to add index to
	 * @param  $name   name of the new index
	 * @param  $column field to index
	 *
	 * @return void
	 */
	public function addIndex($type, $name, $column);
	/**
	 * This method should return the true type name of a given alias.
	 * For instance 'magazine' -> 'book' if magazine is just another name
	 * of the real 'type' called book.
	 *
	 * @param  string $type type
	 *
	 * @return string $realType type
	 */
	public function getAlias($type);
	/**
	 * This method should return the datatype to be used for primary key IDS and
	 * foreign keys. Return one if the data type constants.
	 *
	 * @return integer $const data type to be used for IDS.
	 */
	public function getTypeForID();
}
/**
 * RedBean Abstract Query Writer
 *
 * @file 			RedBean/QueryWriter/AQueryWriter.php
 * @description
 *					Represents an abstract Database to RedBean
 *					To write a driver for a different database for RedBean
 *					Contains a number of functions all implementors can
 *					inherit or override.
 *
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
abstract class RedBean_QueryWriter_AQueryWriter {
	/**
	 * @var array
	 * FK Cache
	 */
	protected $fcache = array();
	/**
	 *
	 * @var RedBean_IBeanFormatter
	 * Holds the bean formatter to be used for applying
	 * table schema.
	 */
	public $tableFormatter;
	/**
	 * @var array
	 * Supported Column Types.
	 */
	public $typeno_sqltype = array();
	/**
	 *
	 * @var RedBean_Adapter_DBAdapter
	 * Holds a reference to the database adapter to be used.
	 */
	protected $adapter;
	/**
	 * @var string
	 * Indicates the field name to be used for primary keys;
	 * default is 'id'.
	 */
	protected $idfield = "id";
	/**
	 * @var string
	 * default value to for blank field (passed to PK for auto-increment)
	 */
	protected $defaultValue = 'NULL';
	/**
	 * @var string
	 * character to escape keyword table/column names
	 */
	protected $quoteCharacter = '';
	/**
	 * Constructor
	 * Sets the default Bean Formatter, use parent::__construct() in
	 * subclass to achieve this.
	 */
	public function __construct() {
		$this->tableFormatter = new RedBean_DefaultBeanFormatter();
	}
	/**
	 * Do everything that needs to be done to format a table name.
	 *
	 * @param string $name of table
	 *
	 * @return string table name
	 */
	public function safeTable($name, $noQuotes = false) {
		$name = $this->getFormattedTableName($name);
		$name = $this->check($name);
		if (!$noQuotes) $name = $this->noKW($name);
		return $name;
	}
	/**
	 * Do everything that needs to be done to format a column name.
	 *
	 * @param string $name of column
	 *
	 * @return string $column name
	 */
	public function safeColumn($name, $noQuotes = false) {
		$name = $this->check($name);
		if (!$noQuotes) $name = $this->noKW($name);
		return $name;
	}
	/**
	 * Returns the sql that should follow an insert statement.
	 *
	 * @param string $table name
	 *
	 * @return string sql
	 */
  	protected function getInsertSuffix ($table) {
    	return "";
  	}
	/**
	 * Returns the string identifying a table for a given type.
	 *
	 * @param string $type
	 *
	 * @return string $table
	 */
	public function getFormattedTableName($type) {
		return $this->tableFormatter->formatBeanTable($type);
	}
	/**
	 * Returns an alias type based on a reference type. If the writer has
	 * a tableformatter this method will pass the type to the writer's alias
	 * function to get the alias of the type back.
	 *
	 * @param  string $type type you want an alias for
	 *
	 * @return
	 */
	public function getAlias($type) {
		return $this->tableFormatter->getAlias($type);
	}
	/**
	 * Sets the new bean formatter. A bean formatter is an instance
	 * of the class BeanFormatter that determines how a bean should be represented
	 * in the database.
	 *
	 * @param RedBean_IBeanFormatter $beanFormatter bean format
	 *
	 * @return void
	 */
	public function setBeanFormatter( RedBean_IBeanFormatter $beanFormatter ) {
		$this->tableFormatter = $beanFormatter;
	}
	/**
	 * Get sql column type.
	 *
	 * @param integer $type constant
	 *
	 * @return string sql type
	 */
	public function getFieldType( $type = "" ) {
		return array_key_exists($type, $this->typeno_sqltype) ? $this->typeno_sqltype[$type] : "";
	}
	/**
	 * Returns the column name that should be used
	 * to store and retrieve the primary key ID.
	 *
	 * @param string $type type of bean to get ID Field for
	 *
	 * @return string $idfieldtobeused ID field to be used for this type of bean
	 */
	public function getIDField( $type ) {
		$nArgs = func_num_args();
		if ($nArgs>1) throw new Exception("Deprecated parameter SAFE, use safeColumn() instead.");
		return $this->tableFormatter->formatBeanID($type);
	}
	/**
	 * Checks table name or column name.
	 *
	 * @param string $table table string
	 *
	 * @return string $table escaped string
	 */
	protected function check($table) {
		if ($this->quoteCharacter && strpos($table, $this->quoteCharacter)!==false) {
		  throw new Redbean_Exception_Security("Illegal chars in table name");
	    }
		return $this->adapter->escape($table);
	}
	/**
	 * Puts keyword escaping symbols around string.
	 *
	 * @param string $str keyword
	 *
	 * @return string $keywordSafeString escaped keyword
	 */
	protected function noKW($str) {
		$q = $this->quoteCharacter;
		return $q.$str.$q;
	}
	/**
	 * This method adds a column to a table.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string  $type   name of the table
	 * @param string  $column name of the column
	 * @param integer $field  data type for field
	 *
	 * @return void
	 *
	 */
	public function addColumn( $type, $column, $field ) {
		$table = $type;
		$type = $field;
		$table = $this->safeTable($table);
		$column = $this->safeColumn($column);
		$type = $this->getFieldType($type);
		$sql = "ALTER TABLE $table ADD $column $type ";
		$this->adapter->exec( $sql );
	}
	/**
	 * This method updates (or inserts) a record, it takes
	 * a table name, a list of update values ( $field => $value ) and an
	 * primary key ID (optional). If no primary key ID is provided, an
	 * INSERT will take place.
	 * Returns the new ID.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string  $type         name of the table to update
	 * @param array   $updatevalues list of update values
	 * @param integer $id			optional primary key ID value
	 *
	 * @return integer $id the primary key ID value of the new record
	 */
	public function updateRecord( $type, $updatevalues, $id=null) {
		$table = $type;
		if (!$id) {
			$insertcolumns =  $insertvalues = array();
			foreach($updatevalues as $pair) {
				$insertcolumns[] = $pair["property"];
				$insertvalues[] = $pair["value"];
			}
			return $this->insertRecord($table,$insertcolumns,array($insertvalues));
		}
		if ($id && !count($updatevalues)) return $id;
		$idfield = $this->safeColumn($this->getIDField($table));
		$table = $this->safeTable($table);
		$sql = "UPDATE $table SET ";
		$p = $v = array();
		foreach($updatevalues as $uv) {
			$p[] = " {$this->safeColumn($uv["property"])} = ? ";
			$v[]=$uv["value"];
		}
		$sql .= implode(",", $p ) ." WHERE $idfield = ".intval($id);
		$this->adapter->exec( $sql, $v );
		return $id;
	}
	/**
	 * Inserts a record into the database using a series of insert columns
	 * and corresponding insertvalues. Returns the insert id.
	 *
	 * @param string $table			  table to perform query on
	 * @param array  $insertcolumns columns to be inserted
	 * @param array  $insertvalues  values to be inserted
	 *
	 * @return integer $insertid	  insert id from driver, new record id
	 */
	protected function insertRecord( $table, $insertcolumns, $insertvalues ) {
		$default = $this->defaultValue;
		$idfield = $this->safeColumn($this->getIDField($table));
		$suffix = $this->getInsertSuffix($table);
		$table = $this->safeTable($table);
		if (count($insertvalues)>0 && is_array($insertvalues[0]) && count($insertvalues[0])>0) {
			foreach($insertcolumns as $k=>$v) {
				$insertcolumns[$k] = $this->safeColumn($v);
			}
			$insertSQL = "INSERT INTO $table ( $idfield, ".implode(",",$insertcolumns)." ) VALUES ";
			$insertSQL .= "( $default, ". implode(",",array_fill(0,count($insertcolumns)," ? "))." ) $suffix";
			foreach($insertvalues as $i=>$insertvalue) {
				$ids[] = $this->adapter->getCell( $insertSQL, $insertvalue, $i );
			}
			$result = count($ids)===1 ? array_pop($ids) : $ids;
		}
		else {
			$result = $this->adapter->getCell( "INSERT INTO $table ($idfield) VALUES($default) $suffix");
		}
		if ($suffix) return $result;
	   $last_id = $this->adapter->getInsertID();
		return $last_id;
	}
	/**
	 * This selects a record. You provide a
	 * collection of conditions using the following format:
	 * array( $field1 => array($possibleValue1, $possibleValue2,... $possibleValueN ),
	 * ...$fieldN=>array(...));
	 * Also, additional SQL can be provided. This SQL snippet will be appended to the
	 * query string. If the $delete parameter is set to TRUE instead of selecting the
	 * records they will be deleted.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @throws Exception
	 * @param string  $type    type of bean to select records from
	 * @param array   $cond    conditions using the specified format
	 * @param string  $asql    additional sql
	 * @param boolean $delete  IF TRUE delete records (optional)
	 * @param boolean $inverse IF TRUE inverse the selection (optional)
	 *
	 * @return array $records selected records
	 */
	public function selectRecord( $type, $conditions, $addSql=null, $delete=null, $inverse=false ) { 
		if (!is_array($conditions)) throw new Exception("Conditions must be an array");
		$table = $this->safeTable($type);
		$sqlConditions = array();
		$bindings=array();
		foreach($conditions as $column=>$values) {
			$sql = $this->safeColumn($column);
			$sql .= " ".($inverse ? " NOT ":"")." IN ( ";
			$sql .= implode(",",array_fill(0,count($values),"?")).") ";
			$sqlConditions[] = $sql;
			if (!is_array($values)) $values = array($values);
			foreach($values as $k=>$v) {
				$values[$k]=strval($v);
			}
			$bindings = array_merge($bindings,$values);
		}
		
		if (is_array($addSql)) {
			if (count($addSql)>1) {
				$bindings = array_merge($bindings,$addSql[1]);
			}
			else {
				$bindings = array();
			}
			$addSql = $addSql[0];
		}
		$sql="";
		if (count($sqlConditions)>0) {
			$sql = implode(" AND ",$sqlConditions);
			$sql = " WHERE ( $sql ) ";
			if ($addSql) $sql .= " AND $addSql ";
		}
		elseif ($addSql) {
			$sql = " WHERE ".$addSql;
		}
		$sql = (($delete) ? "DELETE FROM " : "SELECT * FROM ").$table.$sql;
		$rows = $this->adapter->get($sql,$bindings);
		return $rows;
	}
	/**
	 * This creates a view with name $viewID and
	 * based on the reference type. A list of types
	 * will be provided in the second argument. This method should create
	 * a view by joining each type in the list (using LEFT OUTER JOINS) to the
	 * reference type. If a type is mentioned multiple times it does not need
	 * to be re-joined but the next type should be joined to that type instead.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param  string $referenceType reference type
	 * @param  array  $constraints   list of types
	 * @param  string $viewID		 name of the new view
	 *
	 * @return boolean $success whether a view has been generated
	 */
	public function createView($referenceType, $constraints, $viewID) {
		$referenceTable = $referenceType;
		$viewID = $this->safeTable($viewID,true);
		$safeReferenceTable = $this->safeTable($referenceTable);
		try{ $this->adapter->exec("DROP VIEW $viewID"); }catch(Exception $e){}
		$columns = array_keys( $this->getColumns( $referenceTable ) );
		$referenceTable = ($referenceTable);
		$joins = array();
		foreach($constraints as $table=>$constraint) {
			$safeTable = $this->safeTable($table);
			$addedColumns = array_keys($this->getColumns($table));
			foreach($addedColumns as $addedColumn) {
				$newColName = $addedColumn."_of_".$table;
				$newcolumns[] = $this->safeTable($table).".".$this->safeColumn($addedColumn) . " AS ".$this->safeColumn($newColName);
			}
			if (count($constraint)!==2) throw Exception("Invalid VIEW CONSTRAINT");
			$referenceColumn = $constraint[0];
			$compareColumn = $constraint[1];
			$join = $referenceColumn." = ".$compareColumn;
			$joins[] = " LEFT JOIN $safeTable ON $join ";
		}
		$joins = implode(" ", $joins);
		foreach($columns as $k=>$column) {
			$columns[$k]=$safeReferenceTable.".".$this->safeColumn($column)." as ".$this->safeColumn($column);
		}
		$columns = implode("\n,",array_merge($newcolumns,$columns));
		$sql = "CREATE VIEW $viewID AS SELECT $columns FROM $safeReferenceTable $joins ";
		$this->adapter->exec($sql);
		return true;
	}
	/**
	 * This method removes all beans of a certain type.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param  string $type bean type
	 *
	 * @return void
	 */
	public function wipe($type) {
		$table = $type;
		$table = $this->safeTable($table);
		$sql = "TRUNCATE $table ";
		$this->adapter->exec($sql);
	}
	/**
	 * Counts rows in a table.
	 *
	 * @param string $beanType
	 *
	 * @return integer $numRowsFound
	 */
	public function count($beanType) {
		$table = $this->safeTable($beanType);
		$sql = "SELECT count(*) FROM $table ";
		return (int) $this->adapter->getCell($sql);
	}
	/**
	 * This method should add an index to a type and field with name
	 * $name.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param  $type   type to add index to
	 * @param  $name   name of the new index
	 * @param  $column field to index
	 *
	 * @return void
	 */
	public function addIndex($type, $name, $column) {
		$table = $type;
		$table = $this->safeTable($table);
		$name = preg_replace("/\W/","",$name);
		$column = $this->safeColumn($column);
		try{ $this->adapter->exec("CREATE INDEX $name ON $table ($column) "); }catch(Exception $e){}
	}
	/**
	 * This is a utility service method publicly available.
	 * It allows you to check whether you can safely treat an certain value as an integer by
	 * comparing an int-valled string representation with a default string casted string representation and
	 * a ctype-digit check. It does not take into account numerical limitations (X-bit INT), just that it
	 * can be treated like an INT. This is useful for binding parameters to query statements like
	 * Query Writers and drivers can do.
	 *
	 * @static
	 *
	 * @param  string $value string representation of a certain value
	 *
	 * @return boolean $value boolean result of analysis
	 */
	public static function canBeTreatedAsInt( $value ) {
		return (boolean) (ctype_digit(strval($value)) && strval($value)===strval(intval($value)));
	}
	/**
	 * This method adds a foreign key from type and field to
	 * target type and target field.
	 * The foreign key is created without an action. On delete/update
	 * no action will be triggered. The FK is only used to allow database
	 * tools to generate pretty diagrams and to make it easy to add actions
	 * later on.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 *
	 * @param  string $type	       type that will have a foreign key field
	 * @param  string $targetType  points to this type
	 * @param  string $field       field that contains the foreign key value
	 * @param  string $targetField field where the fk points to
	 *
	 * @return void
	 */
	public function addFK( $type, $targetType, $field, $targetField) {
		$table = $this->safeTable($type);
		$tableNoQ = $this->safeTable($type,true);
		$targetTable = $this->safeTable($targetType);
		$column = $this->safeColumn($field);
		$columnNoQ = $this->safeColumn($field,true);
		$targetColumn  = $this->safeColumn($targetField);
		$db = $this->adapter->getCell("select database()");
		$fks =  $this->adapter->getCell("
			SELECT count(*)
			FROM information_schema.KEY_COLUMN_USAGE
			WHERE TABLE_SCHEMA ='$db' AND TABLE_NAME = '$tableNoQ'  AND COLUMN_NAME = '$columnNoQ' AND
			CONSTRAINT_NAME <>'PRIMARY' AND REFERENCED_TABLE_NAME is not null
		");
		if ($fks==0) {
			try{
				$this->adapter->exec("ALTER TABLE  $table
				ADD FOREIGN KEY (  $column ) REFERENCES  $targetTable (
				$targetColumn) ON DELETE SET NULL ON UPDATE SET NULL ;");
			}
			catch(Exception $e) {
			}
		}
	}
	/**
	 * Returns the format for link tables.
	 * Given an array containing two type names this method returns the
	 * name of the link table to be used to store and retrieve
	 * association records.
	 *
	 * @param  array $types two types array($type1,$type2)
	 *
	 * @return string $linktable name of the link table
	 */
	public function getAssocTableFormat($types) {
		sort($types);
		return ( implode("_", $types) );
	}
	/**
	 * Adds a constraint. If one of the beans gets trashed
	 * the other, related bean should be removed as well.
	 *
	 * @param RedBean_OODBBean $bean1      first bean
	 * @param RedBean_OODBBean $bean2      second bean
	 * @param bool 			   $dontCache  by default we use a cache, TRUE = NO CACHING (optional)
	 *
	 * @return void
	 */
	public function addConstraint( RedBean_OODBBean $bean1, RedBean_OODBBean $bean2, $dontCache = false ) {
		$table1 = $bean1->getMeta("type");
		$table2 = $bean2->getMeta("type");
		$writer = $this;
		$adapter = $this->adapter;
		$table = $this->getAssocTableFormat( array( $table1,$table2) );
		$idfield1 = $writer->getIDField($bean1->getMeta("type"));
		$idfield2 = $writer->getIDField($bean2->getMeta("type"));
		$property1 = $bean1->getMeta("type") . "_id";
		$property2 = $bean2->getMeta("type") . "_id";
		if ($property1==$property2) $property2 = $bean2->getMeta("type")."2_id";
		$table = $adapter->escape($table);
		$table1 = $adapter->escape($table1);
		$table2 = $adapter->escape($table2);
		$property1 = $adapter->escape($property1);
		$property2 = $adapter->escape($property2);
		
		$fkCode = "fk".md5($table.$property1.$property2);
		if (isset($this->fkcache[$fkCode])) return false;
		
		try {
			return $this->constrain($table, $table1, $table2, $property1, $property2, $dontCache);
		}
		catch(RedBean_Exception_SQL $e) {
			if (!$writer->sqlStateIn($e->getSQLState(),
			array(
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
			)) throw $e;
		}
		return false;
	}
	/**
	 * Abstract method. Needs to be implemented by 'fluid' driver.
	 * Add the constraints for a specific database driver.
	 * @abstract
	 *
	 * @param string			  $table     table
	 * @param string			  $table1    table1
	 * @param string			  $table2    table2
	 * @param string			  $property1 property1
	 * @param string			  $property2 property2
	 * @param boolean			  $dontCache want to have cache?
	 *
	 * @return boolean $succes whether the constraint has been applied
	 */
	abstract protected function constrain($table, $table1, $table2, $p1, $p2, $cache);
	protected function startsWithZeros($value) {
		$value = strval($value);
		if (strlen($value)>1 && strpos($value,'0')===0 && strpos($value,'0.')!==0) {
			return true;
		}
		else {
			return false;
		}
	}
}

/**
 * RedBean MySQLWriter
 *
 * @file				RedBean/QueryWriter/MySQL.php
 * @description	Represents a MySQL Database to RedBean
 *						To write a driver for a different database for RedBean
 *						you should only have to change this file.
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_QueryWriter_MySQL extends RedBean_QueryWriter_AQueryWriter implements RedBean_QueryWriter {
	/**
	 * Here we describe the datatypes that RedBean
	 * Uses internally. If you write a QueryWriter for
	 * RedBean you should provide a list of types like this.
	 */
	/**
	 * @var integer
	 *
	 * DATA TYPE
	 * Boolean Data type
	 */
	const C_DATATYPE_BOOL = 0;
	/**
	 *
	 * @var integer
	 *
	 * DATA TYPE
	 * Unsigned 8BIT Integer
	 *
	 */
	const C_DATATYPE_UINT8 = 1;
	/**
	 *
	 * @var integer
	 *
	 * DATA TYPE
	 * Unsigned 32BIT Integer
	 *
	 */
	const C_DATATYPE_UINT32 = 2;
	/**
	 * @var integer
	 *
	 * DATA TYPE
	 * Double precision floating point number and
	 * negative numbers.
	 *
	 */
	const C_DATATYPE_DOUBLE = 3;
	/**
	 * @var integer
	 *
	 * DATA TYPE
	 * Standard Text column (like varchar255)
	 * At least 8BIT character support.
	 *
	 */
	const C_DATATYPE_TEXT8 = 4;
	/**
	 * @var integer
	 *
	 * DATA TYPE
	 * Long text column (16BIT)
	 *
	 */
	const C_DATATYPE_TEXT16 = 5;
	/**
	 * @var integer
	 *
	 * DATA TYPE
	 * 32BIT long textfield (number of characters can be as high as 32BIT) Data type
	 * This is the biggest column that RedBean supports. If possible you may write
	 * an implementation that stores even bigger values.
	 *
	 */
	const C_DATATYPE_TEXT32 = 6;
	
	const C_DATATYPE_SPECIAL_DATE = 80;
	
	const C_DATATYPE_SPECIAL_DATETIME = 81;
	
	
	
	/**
	 * @var integer
	 *
	 * DATA TYPE
	 * Specified. This means the developer or DBA
	 * has altered the column to a different type not
	 * recognized by RedBean. This high number makes sure
	 * it will not be converted back to another type by accident.
	 *
	 */
	const C_DATATYPE_SPECIFIED = 99;
	const C_DATATYPE_SPECIAL_POINT = 100;
	const C_DATATYPE_SPECIAL_LINESTRING = 101;
	const C_DATATYPE_SPECIAL_GEOMETRY = 102;
	const C_DATATYPE_SPECIAL_POLYGON = 103;
	const C_DATATYPE_SPECIAL_MULTIPOINT = 104;
	const C_DATATYPE_SPECIAL_MULTIPOLYGON = 105;
	const C_DATATYPE_SPECIAL_GEOMETRYCOLLECTION = 106;
	
	/**
	 * @var array
	 * Supported Column Types
	 */
	public $typeno_sqltype = array(
			  RedBean_QueryWriter_MySQL::C_DATATYPE_BOOL=>"  SET('1')  ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_UINT8=>" TINYINT(3) UNSIGNED ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_UINT32=>" INT(11) UNSIGNED ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_DOUBLE=>" DOUBLE ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_TEXT8=>" VARCHAR(255) ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_TEXT16=>" TEXT ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_TEXT32=>" LONGTEXT ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_DATE=>" DATE ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_DATETIME=>" DATETIME ",
			  
			  RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_POINT=>" POINT ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_LINESTRING=>" LINESTRING  ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_GEOMETRY=>" GEOMETRY ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_POLYGON=>" POLYGON ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_MULTIPOINT=>" MULTIPOINT ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_MULTIPOLYGON=>" MULTIPOLYGON ",
			  RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_GEOMETRYCOLLECTION=>" GEOMETRYCOLLECTION ",
			  
			  
			  
	);
	/**
	 *
	 * @var array
	 * Supported Column Types and their
	 * constants (magic numbers)
	 */
	public $sqltype_typeno = array(
			  "set('1')"=>RedBean_QueryWriter_MySQL::C_DATATYPE_BOOL,
			  "tinyint(3) unsigned"=>RedBean_QueryWriter_MySQL::C_DATATYPE_UINT8,
			  "int(11) unsigned"=>RedBean_QueryWriter_MySQL::C_DATATYPE_UINT32,
			  "double" => RedBean_QueryWriter_MySQL::C_DATATYPE_DOUBLE,
			  "varchar(255)"=>RedBean_QueryWriter_MySQL::C_DATATYPE_TEXT8,
			  "text"=>RedBean_QueryWriter_MySQL::C_DATATYPE_TEXT16,
			  "longtext"=>RedBean_QueryWriter_MySQL::C_DATATYPE_TEXT32,
			  "date"=>RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_DATE,
			  "datetime"=>RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_DATETIME,
			  "point"=>RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_POINT,
			  "linestring"=>RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_LINESTRING,
			  "geometry"=>RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_GEOMETRY,
			  "polygon"=>RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_POLYGON,
			  "multipoint"=>RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_MULTIPOINT,
			  "multipolygon"=>RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_MULTIPOLYGON,
			  "geometrycollection"=>RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_GEOMETRYCOLLECTION,
	);
	/**
	 *
	 * @var RedBean_Adapter_DBAdapter
	 */
	protected $adapter;
	/**
	 * @var string
	 * character to escape keyword table/column names
	 */
  	protected $quoteCharacter = '`';
	/**
	 * Constructor.
	 * The Query Writer Constructor also sets up the database.
	 *
	 * @param RedBean_Adapter_DBAdapter $adapter adapter
	 *
	 */
	public function __construct( RedBean_Adapter $adapter ) {
		$this->adapter = $adapter;
		parent::__construct();
	}
	/**
	 * This method returns the datatype to be used for primary key IDS and
	 * foreign keys. Returns one if the data type constants.
	 *
	 * @return integer $const data type to be used for IDS.
	 */
	public function getTypeForID() {
		return self::C_DATATYPE_UINT32;
	}
	/**
	 * Returns all tables in the database.
	 *
	 * @return array $tables tables
	 */
	public function getTables() {
		return $this->adapter->getCol( "show tables" );
	}
	/**
	 * Creates an empty, column-less table for a bean based on it's type.
	 * This function creates an empty table for a bean. It uses the
	 * safeTable() function to convert the type name to a table name.
	 *
	 * @param string $table type of bean you want to create a table for
	 *
	 * @return void
	 */
	public function createTable( $table ) {
		$idfield = $this->safeColumn($this->getIDfield($table));
		$table = $this->safeTable($table);
		$sql = "
                     CREATE TABLE $table (
                    $idfield INT( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
                     PRIMARY KEY ( $idfield )
                     ) ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
				  ";
		$this->adapter->exec( $sql );
	}
	/**
	 * Returns an array containing the column names of the specified table.
	 *
	 * @param string $table table
	 *
	 * @return array $columns columns
	 */
	public function getColumns( $table ) {
		$table = $this->safeTable($table);
		$columnsRaw = $this->adapter->get("DESCRIBE $table");
		foreach($columnsRaw as $r) {
			$columns[$r["Field"]]=$r["Type"];
		}
		return $columns;
	}
	/**
	 * Returns the MySQL Column Type Code (integer) that corresponds
	 * to the given value type.
	 *
	 * @param string $value value
	 *
	 * @return integer $type type
	 */
	public function scanType( $refVal, $flagSpecial=false ) {
		$value = $refVal;
		
		if (is_null($value)) {
			return RedBean_QueryWriter_MySQL::C_DATATYPE_BOOL;
		}
		
		if ($flagSpecial) {
			if (strpos($value,'POINT(')===0) {
				$refVal = $this->adapter->getCell('SELECT GeomFromText(?)',array($value));
				return RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_POINT;
			}
			if (strpos($value,'LINESTRING(')===0) {
				$refVal = $this->adapter->getCell('SELECT GeomFromText(?)',array($value));
				return RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_LINESTRING;
			}
			if (strpos($value,'POLYGON(')===0) {
				$refVal = $this->adapter->getCell('SELECT GeomFromText(?)',array($value));
				return RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_POLYGON;
			}
			if (strpos($value,'MULTIPOINT(')===0) {
				$refVal = $this->adapter->getCell('SELECT GeomFromText(?)',array($value));
				return RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_MULTIPOINT;
			}
			
			
			if (preg_match('/^\d\d\d\d\-\d\d-\d\d$/',$value)) {
				return RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_DATE;
			}
			if (preg_match('/^\d\d\d\d\-\d\d-\d\d\s\d\d:\d\d:\d\d$/',$value)) {
				return RedBean_QueryWriter_MySQL::C_DATATYPE_SPECIAL_DATETIME;
			}
		}
		$value = strval($value);
		if (!$this->startsWithZeros($value)) {
			if ($value=="1" || $value=="") {
				return RedBean_QueryWriter_MySQL::C_DATATYPE_BOOL;
			}
			if (is_numeric($value) && (floor($value)==$value) && $value >= 0 && $value <= 255 ) {
				return RedBean_QueryWriter_MySQL::C_DATATYPE_UINT8;
			}
			if (is_numeric($value) && (floor($value)==$value) && $value >= 0  && $value <= 4294967295 ) {
				return RedBean_QueryWriter_MySQL::C_DATATYPE_UINT32;
			}
			if (is_numeric($value)) {
				return RedBean_QueryWriter_MySQL::C_DATATYPE_DOUBLE;
			}
		}
		if (strlen($value) <= 255) {
			return RedBean_QueryWriter_MySQL::C_DATATYPE_TEXT8;
		}
		if (strlen($value) <= 65535) {
			return RedBean_QueryWriter_MySQL::C_DATATYPE_TEXT16;
		}
		return RedBean_QueryWriter_MySQL::C_DATATYPE_TEXT32;
	}
	/**
	 * Returns the Type Code for a Column Description.
	 *
	 * @param string $typedescription description
	 *
	 * @return integer $typecode code
	 */
	public function code( $typedescription ) {
		$r = ((isset($this->sqltype_typeno[$typedescription])) ? $this->sqltype_typeno[$typedescription] : self::C_DATATYPE_SPECIFIED);
		if ($r > self::C_DATATYPE_SPECIFIED) return self::C_DATATYPE_SPECIFIED;
		return $r;
	}
	/**
	 * This method upgrades the column to the specified data type.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string  $type       type / table that needs to be adjusted
	 * @param string  $column     column that needs to be altered
	 * @param integer $datatype   target data type
	 *
	 * @return void
	 */
	public function widenColumn( $type, $column, $datatype ) {
		$table = $type;
		$type = $datatype;
		$table = $this->safeTable($table);
		$column = $this->safeColumn($column);
		$newtype = $this->getFieldType($type);
		$changecolumnSQL = "ALTER TABLE $table CHANGE $column $column $newtype ";
		$this->adapter->exec( $changecolumnSQL );
	}
	/**
	 * Adds a Unique index constrain to the table.
	 *
	 * @param string $table table
	 * @param string $col1  column
	 * @param string $col2  column
	 *
	 * @return void
	 */
	public function addUniqueIndex( $table,$columns ) {
		$table = $this->safeTable($table);
		sort($columns); 
		foreach($columns as $k=>$v) {
			$columns[$k]= $this->safeColumn($v);
		}
		$r = $this->adapter->get("SHOW INDEX FROM $table");
		$name = "UQ_".sha1(implode(',',$columns));
		if ($r) {
			foreach($r as $i) {
				if ($i["Key_name"]== $name) {
					return;
				}
			}
		}
		$sql = "ALTER IGNORE TABLE $table
                ADD UNIQUE INDEX $name (".implode(",",$columns).")";
		$this->adapter->exec($sql);
	}
	/**
	 * Tests whether a given SQL state is in the list of states.
	 *
	 * @param string $state code
	 * @param array  $list  array of sql states
	 *
	 * @return boolean $yesno occurs in list
	 */
	public function sqlStateIn($state, $list) {
		$sqlState = "0";
		if ($state == "42S02") $sqlState = RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE;
		if ($state == "42S22") $sqlState = RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN;
		if ($state == "23000") $sqlState = RedBean_QueryWriter::C_SQLSTATE_INTEGRITY_CONSTRAINT_VIOLATION;
		return in_array($sqlState, $list);
	}
	/**
	 * Add the constraints for a specific database driver: MySQL.
	 * @todo Too many arguments; find a way to solve this in a neater way.
	 *
	 * @param string			  $table     table
	 * @param string			  $table1    table1
	 * @param string			  $table2    table2
	 * @param string			  $property1 property1
	 * @param string			  $property2 property2
	 * @param boolean			  $dontCache want to have cache?
	 *
	 * @return boolean $succes whether the constraint has been applied
	 */
	protected function constrain($table, $table1, $table2, $property1, $property2, $dontCache) {
		try{
			$writer = $this;
			$adapter = $this->adapter;
			$db = $adapter->getCell("select database()");
			$fkCode = "fk".md5($table.$property1.$property2);
			$fks =  $adapter->getCell("
				SELECT count(*)
				FROM information_schema.KEY_COLUMN_USAGE
				WHERE TABLE_SCHEMA ='$db' AND TABLE_NAME ='".$writer->getFormattedTableName($table)."' AND
				CONSTRAINT_NAME <>'PRIMARY' AND REFERENCED_TABLE_NAME is not null
					  ");
			
			if ($fks>0) return false;
			
			if (!$dontCache) $this->fkcache[ $fkCode ] = true;
			$columns = $writer->getColumns($table);
			if ($writer->code($columns[$property1])!==RedBean_QueryWriter_MySQL::C_DATATYPE_UINT32) {
				$writer->widenColumn($table, $property1, RedBean_QueryWriter_MySQL::C_DATATYPE_UINT32);
			}
			if ($writer->code($columns[$property2])!==RedBean_QueryWriter_MySQL::C_DATATYPE_UINT32) {
				$writer->widenColumn($table, $property2, RedBean_QueryWriter_MySQL::C_DATATYPE_UINT32);
			}
			$idfield1 = $writer->getIDField($table1);
			$idfield2 = $writer->getIDField($table2);
			$table = $writer->getFormattedTableName($table);
			$table1 = $writer->getFormattedTableName($table1);
			$table2 = $writer->getFormattedTableName($table2);
			$sql = "
				ALTER TABLE ".$writer->noKW($table)."
				ADD FOREIGN KEY($property1) references `$table1`($idfield1) ON DELETE CASCADE;
					  ";
			$adapter->exec( $sql );
			$sql ="
				ALTER TABLE ".$writer->noKW($table)."
				ADD FOREIGN KEY($property2) references `$table2`($idfield2) ON DELETE CASCADE
					  ";
			$adapter->exec( $sql );
			return true;
		}
		catch(Exception $e){
			return false;
		}
	}
	/**
	 * Drops all tables in database
	 */
	public function wipeAll() {
		$this->adapter->exec('SET FOREIGN_KEY_CHECKS=0;');
		foreach($this->getTables() as $t) {
	 		try{
	 			$this->adapter->exec("drop table if exists`$t`");
	 		}
	 		catch(Exception $e){}
	 		try{
	 			$this->adapter->exec("drop view if exists`$t`");
	 		}
	 		catch(Exception $e){}
		}
		$this->adapter->exec('SET FOREIGN_KEY_CHECKS=1;');
	}
}

/**
 * RedBean SQLiteWriter with support for SQLite types
 *
 * @file				RedBean/QueryWriter/SQLiteT.php
 * @description			Represents a SQLite Database to RedBean
 *						To write a driver for a different database for RedBean
 *						you should only have to change this file.
 * @author				Gabor de Mooij
 * @license				BSD
 */
class RedBean_QueryWriter_SQLiteT extends RedBean_QueryWriter_AQueryWriter implements RedBean_QueryWriter {
	/**
	 *
	 * @var RedBean_Adapter_DBAdapter
	 * Holds database adapter
	 */
	protected $adapter;
	/**
	 * @var string
	 * character to escape keyword table/column names
	 */
  	protected $quoteCharacter = '`';
	/**
	 * Here we describe the datatypes that RedBean
	 * Uses internally. If you write a QueryWriter for
	 * RedBean you should provide a list of types like this.
	 */
	/**
	 * DATA TYPE
	 * Integer Data type
	 * @var integer
	 */
	const C_DATATYPE_INTEGER = 0;
	/**
	 * DATA TYPE
	 * Numeric Data type (for REAL and date/time)
	 * @var integer
	 */
	const C_DATATYPE_NUMERIC = 1;
	/**
	 * DATA TYPE
	 * Text type
	 * @var integer
	 */
	const C_DATATYPE_TEXT = 2;
	/**
	 * DATA TYPE
	 * Specified. This means the developer or DBA
	 * has altered the column to a different type not
	 * recognized by RedBean. This high number makes sure
	 * it will not be converted back to another type by accident.
	 * @var integer
	 */
	const C_DATATYPE_SPECIFIED = 99;
	/**
	 * @var array
	 * Supported Column Types
	 */
	public $typeno_sqltype = array(
			  RedBean_QueryWriter_SQLiteT::C_DATATYPE_INTEGER=>"INTEGER",
			  RedBean_QueryWriter_SQLiteT::C_DATATYPE_NUMERIC=>"NUMERIC",
			  RedBean_QueryWriter_SQLiteT::C_DATATYPE_TEXT=>"TEXT",
	);
	/**
	 *
	 * @var array
	 * Supported Column Types and their
	 * constants (magic numbers)
	 */
	public $sqltype_typeno = array(
			  "INTEGER"=>RedBean_QueryWriter_SQLiteT::C_DATATYPE_INTEGER,
			  "NUMERIC"=>RedBean_QueryWriter_SQLiteT::C_DATATYPE_NUMERIC,
			  "TEXT"=>RedBean_QueryWriter_SQLiteT::C_DATATYPE_TEXT,
	);
	/**
	 * Constructor
	 * The Query Writer Constructor also sets up the database
	 *
	 * @param RedBean_Adapter_DBAdapter $adapter adapter
	 */
	public function __construct( RedBean_Adapter $adapter ) {
		$this->adapter = $adapter;
		parent::__construct($adapter);
	}
	/**
	 * This method returns the datatype to be used for primary key IDS and
	 * foreign keys. Returns one if the data type constants.
	 *
	 * @return integer $const data type to be used for IDS.
	 */
	public function getTypeForID() {
		return self::C_DATATYPE_INTEGER;
	}
	/**
	 * Returns the MySQL Column Type Code (integer) that corresponds
	 * to the given value type.
	 *
	 * @param  string $value value
	 *
	 * @return integer $type type
	 */
	public function scanType( $refVal, $flagSpecial=false ) {
		$value = $refVal;
		if ($value===false) return self::C_DATATYPE_INTEGER;
		if ($value===null) return self::C_DATATYPE_INTEGER; 
		if ($this->startsWithZeros($value)) return self::C_DATATYPE_TEXT;
		if (is_numeric($value) && (intval($value)==$value) && $value<2147483648) return self::C_DATATYPE_INTEGER;
		if ((is_numeric($value) && $value < 2147483648)
				  || preg_match("/\d\d\d\d\-\d\d\-\d\d/",$value)
				  || preg_match("/\d\d\d\d\-\d\d\-\d\d\s\d\d:\d\d:\d\d/",$value)
		) {
			return self::C_DATATYPE_NUMERIC;
		}
		return self::C_DATATYPE_TEXT;
	}
	/**
	 * Adds a column of a given type to a table
	 *
	 * @param string  $table  table
	 * @param string  $column column
	 * @param integer $type	  type
	 */
	public function addColumn( $table, $column, $type) {
		$table = $this->getFormattedTableName($table);
		$column = $this->check($column);
		$table = $this->check($table);
		$type=$this->typeno_sqltype[$type];
		$sql = "ALTER TABLE `$table` ADD `$column` $type ";
		$this->adapter->exec( $sql );
	}
	/**
	 * Returns the Type Code for a Column Description
	 *
	 * @param string $typedescription description
	 *
	 * @return integer $typecode code
	 */
	public function code( $typedescription ) {
		$r =  ((isset($this->sqltype_typeno[$typedescription])) ? $this->sqltype_typeno[$typedescription] : 99);
		if ($r > self::C_DATATYPE_SPECIFIED) return self::C_DATATYPE_SPECIFIED;
		return $r;
	}
	/**
	 * Quote Items, to prevent issues with reserved words.
	 *
	 * @param array $items items to quote
	 *
	 * @return $quotedfItems quoted items
	 */
	private function quote( $items ) {
		foreach($items as $k=>$item) {
			$items[$k]=$this->noKW($item);
		}
		return $items;
	}
	/**
	 * This method upgrades the column to the specified data type.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string  $type       type / table that needs to be adjusted
	 * @param string  $column     column that needs to be altered
	 * @param integer $datatype   target data type
	 *
	 * @return void
	 */
	public function widenColumn( $type, $column, $datatype ) {
		$table = $this->safeTable($type,true);
		$column = $this->safeColumn($column,true);
		$idfield = $this->safeColumn($this->getIDfield($type),true);
		$newtype = $this->typeno_sqltype[$datatype];
		$oldColumns = $this->getColumns($type);
		$oldColumnNames = $this->quote(array_keys($oldColumns));
		$newTableDefStr="";
		foreach($oldColumns as $oldName=>$oldType) {
			if ($oldName != $idfield) {
				if ($oldName!=$column) {
					$newTableDefStr .= ",`$oldName` $oldType";
				}
				else {
					$newTableDefStr .= ",`$oldName` $newtype";
				}
			}
		}
		$q = array();
		$q[] = "DROP TABLE IF EXISTS tmp_backup;";
		$q[] = "CREATE TEMPORARY TABLE tmp_backup(".implode(",",$oldColumnNames).");";
		$q[] = "INSERT INTO tmp_backup SELECT * FROM `$table`;";
		$q[] = "DROP TABLE `$table`;";
		$q[] = "CREATE TABLE `$table` ( `$idfield` INTEGER PRIMARY KEY AUTOINCREMENT  $newTableDefStr  );";
		$q[] = "INSERT INTO `$table` SELECT * FROM tmp_backup;";
		$q[] = "DROP TABLE tmp_backup;";
		foreach($q as $sq) {
			$this->adapter->exec($sq);
		}
	}
	/**
	 * Returns all tables in the database
	 *
	 * @return array $tables tables
	 */
	public function getTables() {
		return $this->adapter->getCol( "SELECT name FROM sqlite_master
			WHERE type='table' AND name!='sqlite_sequence';" );
	}
	/**
	 * Creates an empty, column-less table for a bean.
	 *
	 * @param string $table table
	 */
	public function createTable( $table ) {
		$idfield = $this->safeColumn($this->getIDfield($table));
		$table = $this->safeTable($table);
		$sql = "
                     CREATE TABLE $table ( $idfield INTEGER PRIMARY KEY AUTOINCREMENT )
				  ";
		$this->adapter->exec( $sql );
	}
	/**
	 * Returns an array containing the column names of the specified table.
	 *
	 * @param string $table table
	 *
	 * @return array $columns columns
	 */
	public function getColumns( $table ) {
		$table = $this->safeTable($table, true);
		$columnsRaw = $this->adapter->get("PRAGMA table_info('$table')");
		$columns = array();
		foreach($columnsRaw as $r) {
			$columns[$r["name"]]=$r["type"];
		}
		return $columns;
	}
	/**
	 * Adds a Unique index constrain to the table.
	 *
	 * @param string $table   table
	 * @param string $column1 first column
	 * @param string $column2 second column
	 *
	 * @return void
	 */
	public function addUniqueIndex( $table,$columns ) {
		$table = $this->safeTable($table);
		$name = "UQ_".sha1(implode(',',$columns));
		$sql = "CREATE UNIQUE INDEX IF NOT EXISTS $name ON $table (".implode(",",$columns).")";
		$this->adapter->exec($sql);
	}
	/**
	 * Given an Database Specific SQLState and a list of QueryWriter
	 * Standard SQL States this function converts the raw SQL state to a
	 * database agnostic ANSI-92 SQL states and checks if the given state
	 * is in the list of agnostic states.
	 *
	 * @param string $state state
	 * @param array  $list  list of states
	 *
	 * @return boolean $isInArray whether state is in list
	 */
	public function sqlStateIn($state, $list) {
		$sqlState = "0";
		if ($state == "HY000") $sqlState = RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE;
		if ($state == "23000") $sqlState = RedBean_QueryWriter::C_SQLSTATE_INTEGRITY_CONSTRAINT_VIOLATION;
		return in_array($sqlState, $list);
	}
	/**
	 * Counts rows in a table.
	 * Uses SQLite optimization for deleting all records (i.e. no WHERE)
	 *
	 * @param string $beanType
	 *
	 * @return integer $numRowsFound
	 */
	public function wipe($type) {
		$table = $this->safeTable($type);
		$this->adapter->exec("DELETE FROM $table");
	}
	/**
	 * Adds a foreign key to a type
	 *
	 * @param  string $type        type you want to modify table of
	 * @param  string $targetType  target type
	 * @param  string $field       field of the type that needs to get the fk
	 * @param  string $targetField field where the fk needs to point to
	 *
	 * @return bool $success whether an FK has been added
	 */
	public function addFK( $type, $targetType, $field, $targetField) {
		return $this->buildFK($type, $targetType, $field, $targetField);
	}
	/**
	 * Adds a foreign key to a type
	 *
	 * @param  string $type        type you want to modify table of
	 * @param  string $targetType  target type
	 * @param  string $field       field of the type that needs to get the fk
	 * @param  string $targetField field where the fk needs to point to
	 * @param  integer $buildopt   0 = NO ACTION, 1 = ON DELETE CASCADE
	 *
	 * @return bool $success whether an FK has been added
	 */
	protected function buildFK($type, $targetType, $field, $targetField,$constraint=false) {
			try{
				$table = $this->safeTable($type,true);
				$targetTable = $this->safeTable($targetType,true);
				$field = $this->safeColumn($field,true);
				$targetField = $this->safeColumn($targetField,true);
				$idfield = $this->safeColumn($this->getIDfield($type),true);
				$oldColumns = $this->getColumns($type);
				$oldColumnNames = $this->quote(array_keys($oldColumns));
				$newTableDefStr="";
				foreach($oldColumns as $oldName=>$oldType) {
					if ($oldName != $idfield) {
						$newTableDefStr .= ",`$oldName` $oldType";
					}
				}
				
				$sqlGetOldFKS = "PRAGMA foreign_key_list('$table'); ";
				$oldFKs = $this->adapter->get($sqlGetOldFKS);
				$restoreFKSQLSnippets = "";
				foreach($oldFKs as $oldFKInfo) {
					if ($oldFKInfo['from']==$field) {
						
						return false;
					}
					$oldTable = $table;
					$oldField = $oldFKInfo['from'];
					$oldTargetTable = $oldFKInfo['table'];
					$oldTargetField = $oldFKInfo['to'];
					$restoreFKSQLSnippets .= ", FOREIGN KEY(`$oldField`) REFERENCES `$oldTargetTable`(`$oldTargetField`) ON DELETE ".$oldFKInfo['on_delete'];
				}
				$fkDef = $restoreFKSQLSnippets;
				if ($constraint) {
					$fkDef .= ', FOREIGN KEY(`'.$field.'`) REFERENCES `'.$targetTable.'`(`'.$targetField.'`) ON DELETE CASCADE ';
				}
				else {
					$fkDef .= ', FOREIGN KEY(`'.$field.'`) REFERENCES `'.$targetTable.'`(`'.$targetField.'`) ON DELETE SET NULL ON UPDATE SET NULL';
				}
				$q = array();
				$q[] = "DROP TABLE IF EXISTS tmp_backup;";
				$q[] = "CREATE TEMPORARY TABLE tmp_backup(".implode(",",$oldColumnNames).");";
				$q[] = "INSERT INTO tmp_backup SELECT * FROM `$table`;";
				$q[] = "PRAGMA foreign_keys = 0 ";
				$q[] = "DROP TABLE `$table`;";
				$q[] = "CREATE TABLE `$table` ( `$idfield` INTEGER PRIMARY KEY AUTOINCREMENT  $newTableDefStr $fkDef );";
				$q[] = "INSERT INTO `$table` SELECT * FROM tmp_backup;";
				$q[] = "DROP TABLE tmp_backup;";
				$q[] = "PRAGMA foreign_keys = 1 ";
				foreach($q as $sq) {
					$this->adapter->exec($sq);
				}
			}
			catch(Exception $e){
			}
	}
	/**
	 * Add the constraints for a specific database driver: SQLite.
	 * @todo Too many arguments; find a way to solve this in a neater way.
	 *
	 * @param string			  $table     table
	 * @param string			  $table1    table1
	 * @param string			  $table2    table2
	 * @param string			  $property1 property1
	 * @param string			  $property2 property2
	 * @param boolean			  $dontCache want to have cache?
	 *
	 * @return boolean $succes whether the constraint has been applied
	 */
	protected  function constrain($table, $table1, $table2, $property1, $property2, $dontCache) {
		try{
			$writer = $this;
			$adapter = $this->adapter;
			
			$idfield1 = $writer->getIDField($table1);
			$idfield2 = $writer->getIDField($table2);
			$this->buildFK($table,$table1,$property1,$idfield1,true);
			$this->buildFK($table,$table2,$property2,$idfield2,true);
			return true;
		}
		catch(Exception $e){
			return false;
		}
	}
	/**
	 * Removes all tables and views from the database.
	 */
	public function wipeAll() {
		$this->adapter->exec('PRAGMA foreign_keys = 0 ');
		foreach($this->getTables() as $t) {
	 		try{
	 			$this->adapter->exec("drop table if exists`$t`");
	 		}
	 		catch(Exception $e){}
	 		try{
	 			$this->adapter->exec("drop view if exists`$t`");
	 		}
	 		catch(Exception $e){}
		}
		$this->adapter->exec('PRAGMA foreign_keys = 1 ');
	}
}

/**
 * RedBean PostgreSQL Query Writer
 * @file				RedBean/QueryWriter/PostgreSQL.php
 * @description	QueryWriter for the PostgreSQL database system.
 *
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_QueryWriter_PostgreSQL extends RedBean_QueryWriter_AQueryWriter implements RedBean_QueryWriter {
	/**
	 * DATA TYPE
	 * Integer Data Type
	 * @var integer
	 */
	const C_DATATYPE_INTEGER = 0;
	/**
	 * DATA TYPE
	 * Double Precision Type
	 * @var integer
	 */
	const C_DATATYPE_DOUBLE = 1;
	/**
	 * DATA TYPE
	 * String Data Type
	 * @var integer
	 */
	const C_DATATYPE_TEXT = 3;
	
	
	const C_DATATYPE_SPECIAL_DATE = 80;
	
	const C_DATATYPE_SPECIFIED = 99;
	
	/**
	 * @var array
	 * Supported Column Types
	 */
	public $typeno_sqltype = array(
			  self::C_DATATYPE_INTEGER=>" integer ",
			  self::C_DATATYPE_DOUBLE=>" double precision ",
			  self::C_DATATYPE_TEXT=>" text ",
			  self::C_DATATYPE_SPECIAL_DATE => " date "
	);
	/**
	 *
	 * @var array
	 * Supported Column Types and their
	 * constants (magic numbers)
	 */
	public $sqltype_typeno = array(
			  "integer"=>self::C_DATATYPE_INTEGER,
			  "double precision" => self::C_DATATYPE_DOUBLE,
			  "text"=>self::C_DATATYPE_TEXT,
			  "date"=>self::C_DATATYPE_SPECIAL_DATE
	);
	/**
	 *
	 * @var RedBean_DBAdapter
	 * Holds Database Adapter
	 */
	protected $adapter;
	/**
	 * @var string
	 * character to escape keyword table/column names
	 */
	  protected $quoteCharacter = '"';
  /**
   *
   * @var string
   * Default Value
   */
 	protected $defaultValue = 'DEFAULT';
	/**
	* This method returns the datatype to be used for primary key IDS and
	* foreign keys. Returns one if the data type constants.
	*
	* @return integer $const data type to be used for IDS.
	*/
	public function getTypeForID() {
		return self::C_DATATYPE_INTEGER;
	}
  /**
   * Returns the insert suffix SQL Snippet
   *
   * @param string $table table
   *
   * @return  string $sql SQL Snippet
   */
  protected function getInsertSuffix($table) {
    return "RETURNING ".$this->getIDField($table);
  }
	/**
	 * Constructor
	 * The Query Writer Constructor also sets up the database
	 *
	 * @param RedBean_DBAdapter $adapter adapter
	 */
	public function __construct( RedBean_Adapter_DBAdapter $adapter ) {
		$this->adapter = $adapter;
		parent::__construct();
	}
	/**
	 * Returns all tables in the database
	 *
	 * @return array $tables tables
	 */
	public function getTables() {
		return $this->adapter->getCol( "select table_name from information_schema.tables
where table_schema = 'public'" );
	}
	/**
	 * Creates an empty, column-less table for a bean.
	 *
	 * @param string $table table to create
	 */
	public function createTable( $table ) {
		$idfield = $this->getIDfield($table);
		$table = $this->safeTable($table);
		$sql = " CREATE TABLE $table ($idfield SERIAL PRIMARY KEY); ";
		$this->adapter->exec( $sql );
	}
	/**
	 * Returns an array containing the column names of the specified table.
	 *
	 * @param string $table table to get columns from
	 *
	 * @return array $columns array filled with column (name=>type)
	 */
	public function getColumns( $table ) {
		$table = $this->safeTable($table, true);
		$columnsRaw = $this->adapter->get("select column_name, data_type from information_schema.columns where table_name='$table'");
		foreach($columnsRaw as $r) {
			$columns[$r["column_name"]]=$r["data_type"];
		}
		return $columns;
	}
	/**
	 * Returns the pgSQL Column Type Code (integer) that corresponds
	 * to the given value type.
	 *
	 * @param string $value value to determine type of
	 *
	 * @return integer $type type code for this value
	 */
	public function scanType( $refVal, $flagSpecial=false ) {
		
		$value = $refVal;
		
		if ($flagSpecial) {
			if ($value && preg_match('/^\d\d\d\d\-\d\d-\d\d$/',$value)) {
				return RedBean_QueryWriter_PostgreSQL::C_DATATYPE_SPECIAL_DATE;
			}
		}
		
		$sz = ($this->startsWithZeros($value));
		if ($sz) return self::C_DATATYPE_TEXT;
		if ($value===null || ($value instanceof RedBean_Driver_PDO_NULL) ||(is_numeric($value)
				  && floor($value)==$value
				  && $value < 2147483648
				  && $value > -2147483648)) {
			return self::C_DATATYPE_INTEGER;
		}
		elseif(is_numeric($value)) {
			return self::C_DATATYPE_DOUBLE;
		}
		else {
			return self::C_DATATYPE_TEXT;
		}
	}
	/**
	 * Returns the Type Code for a Column Description
	 *
	 * @param string $typedescription type description to get code for
	 *
	 * @return integer $typecode type code
	 */
	public function code( $typedescription ) {
		$r = ((isset($this->sqltype_typeno[$typedescription])) ? $this->sqltype_typeno[$typedescription] : 99);
		if ($r > self::C_DATATYPE_SPECIFIED) return self::C_DATATYPE_SPECIFIED;
		return $r;
	}
	/**
	 * This method upgrades the column to the specified data type.
	 * This methods accepts a type and infers the corresponding table name.
	 *
	 * @param string  $type       type / table that needs to be adjusted
	 * @param string  $column     column that needs to be altered
	 * @param integer $datatype   target data type
	 *
	 * @return void
	 */
	public function widenColumn( $type, $column, $datatype ) {
		$table = $type;
		$type = $datatype;
		$table = $this->safeTable($table);
		$column = $this->safeColumn($column);
		$newtype = $this->typeno_sqltype[$type];
		$changecolumnSQL = "ALTER TABLE $table \n\t ALTER COLUMN $column TYPE $newtype ";
		try {
			$this->adapter->exec( $changecolumnSQL );
		}catch(Exception $e) {
			die($e->getMessage());
		}
	}
	/**
	 * Adds a Unique index constrain to the table.
	 *
	 * @param string $table table to add index to
	 * @param string $col1  column to be part of index
	 * @param string $col2  column 2 to be part of index
	 *
	 * @return void
	 */
	public function addUniqueIndex( $table,$columns ) {
		$table = $this->safeTable($table, true);
		sort($columns); 
		foreach($columns as $k=>$v) {
			$columns[$k]=$this->safeColumn($v);
		}
		$r = $this->adapter->get("SELECT
									i.relname as index_name
								FROM
									pg_class t,
									pg_class i,
									pg_index ix,
									pg_attribute a
								WHERE
									t.oid = ix.indrelid
									AND i.oid = ix.indexrelid
									AND a.attrelid = t.oid
									AND a.attnum = ANY(ix.indkey)
									AND t.relkind = 'r'
									AND t.relname = '$table'
								ORDER BY  t.relname,  i.relname;");
		$name = "UQ_".sha1($table.implode(',',$columns));
		if ($r) {
			foreach($r as $i) {
				if (strtolower( $i["index_name"] )== strtolower( $name )) {
					return;
				}
			}
		}
		$sql = "ALTER TABLE \"$table\"
                ADD CONSTRAINT $name UNIQUE (".implode(",",$columns).")";
		$this->adapter->exec($sql);
	}
	/**
	 * Given an Database Specific SQLState and a list of QueryWriter
	 * Standard SQL States this function converts the raw SQL state to a
	 * database agnostic ANSI-92 SQL states and checks if the given state
	 * is in the list of agnostic states.
	 *
	 * @param string $state state
	 * @param array  $list  list of states
	 *
	 * @return boolean $isInArray whether state is in list
	 */
	public function sqlStateIn($state, $list) {
		$sqlState = "0";
		if ($state == "42P01") $sqlState = RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE;
		if ($state == "42703") $sqlState = RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN;
		if ($state == "23505") $sqlState = RedBean_QueryWriter::C_SQLSTATE_INTEGRITY_CONSTRAINT_VIOLATION;
		return in_array($sqlState, $list);
	}
	/**
	 * Adds a foreign key to a table. The foreign key will not have any action; you
	 * may configure this afterwards.
	 *
	 * @param  string $type        type you want to modify table of
	 * @param  string $targetType  target type
	 * @param  string $field       field of the type that needs to get the fk
	 * @param  string $targetField field where the fk needs to point to
	 *
	 * @return bool $success whether an FK has been added
	 */
	public function addFK( $type, $targetType, $field, $targetField) {
		try{
			$table = $this->safeTable($type);
			$column = $this->safeColumn($field);
			$tableNoQ = $this->safeTable($type,true);
			$columnNoQ = $this->safeColumn($field,true);
			$targetTable = $this->safeTable($targetType);
			$targetColumn  = $this->safeColumn($targetField);
			$fkCode = $tableNoQ.'_'.$columnNoQ.'_fkey';
			$sql = "
						SELECT
								c.oid,
								n.nspname,
								c.relname,
								n2.nspname,
								c2.relname,
								cons.conname
						FROM pg_class c
						JOIN pg_namespace n ON n.oid = c.relnamespace
						LEFT OUTER JOIN pg_constraint cons ON cons.conrelid = c.oid
						LEFT OUTER JOIN pg_class c2 ON cons.confrelid = c2.oid
						LEFT OUTER JOIN pg_namespace n2 ON n2.oid = c2.relnamespace
						WHERE c.relkind = 'r'
						AND n.nspname IN ('public')
						AND (cons.contype = 'f' OR cons.contype IS NULL)
						AND
						(  cons.conname = '{$fkCode}' )
					  ";
			$rows = $this->adapter->get( $sql );
			if (!count($rows)) {
				try{
					$this->adapter->exec("ALTER TABLE  $table
					ADD FOREIGN KEY (  $column ) REFERENCES  $targetTable (
					$targetColumn) ON DELETE SET NULL ON UPDATE SET NULL DEFERRABLE ;");
					return true;
				}
				catch(Exception $e) {
				}
			}
		}
		catch(Exception $e){
			return false;
		}
	}
	/**
	 * Add the constraints for a specific database driver: PostgreSQL.
	 * @todo Too many arguments; find a way to solve this in a neater way.
	 *
	 * @param string			  $table     table
	 * @param string			  $table1    table1
	 * @param string			  $table2    table2
	 * @param string			  $property1 property1
	 * @param string			  $property2 property2
	 * @param boolean			  $dontCache want to have cache?
	 *
	 * @return boolean $succes whether the constraint has been applied
	 */
	protected function constrain($table, $table1, $table2, $property1, $property2, $dontCache) {
		try{
			$writer = $this;
			$adapter = $this->adapter;
			$fkCode = "fk".md5($table.$property1.$property2);
			$sql = "
						SELECT
								c.oid,
								n.nspname,
								c.relname,
								n2.nspname,
								c2.relname,
								cons.conname
						FROM pg_class c
						JOIN pg_namespace n ON n.oid = c.relnamespace
						LEFT OUTER JOIN pg_constraint cons ON cons.conrelid = c.oid
						LEFT OUTER JOIN pg_class c2 ON cons.confrelid = c2.oid
						LEFT OUTER JOIN pg_namespace n2 ON n2.oid = c2.relnamespace
						WHERE c.relkind = 'r'
						AND n.nspname IN ('public')
						AND (cons.contype = 'f' OR cons.contype IS NULL)
						AND
						(  cons.conname = '{$fkCode}a'	OR  cons.conname = '{$fkCode}b' )
					  ";
			$rows = $adapter->get( $sql );
			if (!count($rows)) {
				$table = $writer->getFormattedTableName($table);
				$table1 = $writer->getFormattedTableName($table1);
				$table2 = $writer->getFormattedTableName($table2);
				if (!$dontCache) $this->fkcache[ $fkCode ] = true;
				$sql1 = "ALTER TABLE \"$table\" ADD CONSTRAINT
						  {$fkCode}a FOREIGN KEY ($property1)
							REFERENCES \"$table1\" (id) ON DELETE CASCADE ";
				$sql2 = "ALTER TABLE \"$table\" ADD CONSTRAINT
						  {$fkCode}b FOREIGN KEY ($property2)
							REFERENCES \"$table2\" (id) ON DELETE CASCADE ";
				$adapter->exec($sql1);
				$adapter->exec($sql2);
			}
			return true;
		}
		catch(Exception $e){
			return false;
		}
	}
	/**
	 * Removes all tables and views from the database.
	 */
	public function wipeAll() {
      	$this->adapter->exec('SET CONSTRAINTS ALL DEFERRED');
      	
      	foreach($this->getTables() as $t) {
      		$t = $this->noKW($t);
	 		try{
	 			$this->adapter->exec("drop table if exists $t CASCADE ");
	 		}
	 		catch(Exception $e){  }
	 		try{
	 			$this->adapter->exec("drop view if exists $t CASCADE ");
	 		}
	 		catch(Exception $e){  throw $e; }
		}
		
		$this->adapter->exec('SET CONSTRAINTS ALL IMMEDIATE');
	}
}

/**
 * RedBean Exception Base
 *
 * @file				RedBean/Exception.php
 * @description	Represents the base class
 * 					for RedBean Exceptions
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_Exception extends Exception {
}
/**
 * RedBean Exception SQL
 *
 * @file				RedBean/Exception/SQL.php
 * @description	Represents a generic database exception independent of the
 *						underlying driver.
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_Exception_SQL extends Exception {
	/**
	 * @var string
	 * Holds the current SQL Strate code.
	 */
	private $sqlState;
	/**
	 * Returns an ANSI-92 compliant SQL state.
	 *
	 * @return string $state ANSI state code
	 */
	public function getSQLState() {
		return $this->sqlState;
	}
	/**
	 * @todo parse state to verify valid ANSI92!
	 * Stores ANSI-92 compliant SQL state.
	 *
	 * @param string $sqlState code
	 */
	public function setSQLState( $sqlState ) {
		$this->sqlState = $sqlState;
	}
	/**
	 * To String prints both code and SQL state.
	 *
	 * @return string $message prints this exception instance as a string
	 */
	public function __toString() {
		return "[".$this->getSQLState()."] - ".$this->getMessage();
	}
}
/**
 * Exception Security.
 * Part of the RedBean Exceptions Mechanism.
 *
 * @file				RedBean/Exception
 * @description	Represents a subtype in the RedBean Exception System.
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_Exception_Security extends RedBean_Exception {}
/**
 * @name RedBean OODB
 * @file RedBean
 * @author Gabor de Mooij and the RedBean Team
 * @copyright Gabor de Mooij (c)
 * @license BSD
 *
 * The RedBean OODB Class is the main class of RedBean.
 * It takes RedBean_OODBBean objects and stores them to and loads them from the
 * database as well as providing other CRUD functions. This class acts as a
 * object database.
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_OODB extends RedBean_Observable {
	/**
	 *
	 * @var array
	 */
	private $stash = NULL;
	/**
	 *
	 * @var RedBean_Adapter_DBAdapter
	 */
	private $writer;
	/**
	 *
	 * @var boolean
	 */
	private $isFrozen = false;
	/**
	 * @var null|\RedBean_BeanHelperFacade
	 */
	private $beanhelper = null;
	/**
	 * The RedBean OODB Class is the main class of RedBean.
	 * It takes RedBean_OODBBean objects and stores them to and loads them from the
	 * database as well as providing other CRUD functions. This class acts as a
	 * object database.
	 * Constructor, requires a DBAadapter (dependency inversion)
	 * @param RedBean_Adapter_DBAdapter $adapter
	 */
	public function __construct( $writer ) {
		if ($writer instanceof RedBean_QueryWriter) {
			$this->writer = $writer;
		}
		$this->beanhelper = new RedBean_BeanHelperFacade();
	}
	/**
	 * Toggles fluid or frozen mode. In fluid mode the database
	 * structure is adjusted to accomodate your objects. In frozen mode
	 * this is not the case.
	 * @param boolean $trueFalse
	 */
	public function freeze( $tf ) {
		$this->isFrozen = (bool) $tf;
	}
	/**
	 * Returns the current mode of operation of RedBean.
	 * In fluid mode the database
	 * structure is adjusted to accomodate your objects.
	 * In frozen mode
	 * this is not the case.
	 * @return <type>
	 */
	public function isFrozen() {
		return (bool) $this->isFrozen;
	}
	/**
	 * Dispenses a new bean (a RedBean_OODBBean Bean Object)
	 * of the specified type. Always
	 * use this function to get an empty bean object. Never
	 * instantiate a RedBean_OODBBean yourself because it needs
	 * to be configured before you can use it with RedBean. This
	 * function applies the appropriate initialization /
	 * configuration for you.
	 * @param string $type
	 * @return RedBean_OODBBean $bean
	 */
	public function dispense($type ) {
		$this->signal( "before_dispense", $type );
		$bean = new RedBean_OODBBean();
		$bean->setBeanHelper($this->beanhelper);
		$bean->setMeta("type", $type );
		$idfield = $this->writer->getIDField($bean->getMeta("type"));
		$bean->setMeta("sys.idfield",$idfield);
		
		$bean->$idfield = 0;
		if (!$this->isFrozen) $this->check( $bean );
		$bean->setMeta("tainted",true);
		$this->signal( "dispense", $bean );
		return $bean;
	}
	/**
	 * Sets bean helper
	 *
	 * @param RedBean_IBeanHelper $beanhelper helper
	 *
	 * @return void
	 */
	public function setBeanHelper( RedBean_IBeanHelper $beanhelper) {
		$this->beanhelper = $beanhelper;
	}
	/**
	 * Checks whether a RedBean_OODBBean bean is valid.
	 * If the type is not valid or the ID is not valid it will
	 * throw an exception: RedBean_Exception_Security.
	 * @throws RedBean_Exception_Security $exception
	 * @param RedBean_OODBBean $bean
	 */
	public function check( RedBean_OODBBean $bean ) {
		$idfield = $this->writer->getIDField($bean->getMeta("type"));
		
		if (!isset($bean->$idfield) ) {
			throw new RedBean_Exception_Security("Bean has incomplete Meta Information $idfield ");
		}
		if (!($bean->getMeta("type"))) {
			throw new RedBean_Exception_Security("Bean has incomplete Meta Information II");
		}
		
		$pattern = '/[^abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_]/';
		
		if (preg_match($pattern,$bean->getMeta("type"))) {
			throw new RedBean_Exception_Security("Bean Type is invalid");
		}
		
		foreach($bean as $prop=>$value) {
			if (
					  is_array($value) ||
					  (is_object($value)) ||
					  strlen($prop)<1 ||
					  preg_match($pattern,$prop)
			) {
				throw new RedBean_Exception_Security("Invalid Bean: property $prop  ");
			}
		}
	}
	/**
	 * @param  $type
	 * @param array $conditions
	 * @param null $addSQL
	 * @return array
	 */
	public function find($type,$conditions=array(),$addSQL=null) {
		try {
			$beans = $this->convertToBeans($type,$this->writer->selectRecord($type,$conditions,$addSQL));
			return $beans;
		}catch(RedBean_Exception_SQL $e) {
			if (!$this->writer->sqlStateIn($e->getSQLState(),
			array(
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE,
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN)
			)) throw $e;
		}
		return array();
	}
	/**
	 * Checks whether the specified table already exists in the database.
	 * Not part of the Object Database interface!
	 * @param string $table
	 * @return boolean $exists
	 */
	public function tableExists($table) {
		
		$tables = $this->writer->getTables();
		return in_array($this->writer->getFormattedTableName($table), $tables);
	}
	/**
	 * Processes all column based build commands.
	 * A build command is an additional instruction for the Query Writer. It is processed only when
	 * a column gets created. The build command is often used to instruct the writer to write some
	 * extra SQL to create indexes or constraints. Build commands are stored in meta data of the bean.
	 * They are only for internal use, try to refrain from using them in your code directly.
	 *
	 * @param  string           $table    name of the table to process build commands for
	 * @param  string           $property name of the property to process build commands for
	 * @param  RedBean_OODBBean $bean     bean that contains the build commands
	 *
	 * @return void
	 */
	protected function processBuildCommands($table, $property, RedBean_OODBBean $bean) {
		if ($inx = ($bean->getMeta("buildcommand.indexes"))) {
			if (isset($inx[$property])) $this->writer->addIndex($table,$inx[$property],$property);
		}
	}
	/**
	 * Process groups
	 *
	 * @param  array $originals originals
	 * @param  array $current   the current beans
	 * @param  array $additions beans that have been added
	 * @param  array $trashcan  beans that have been deleted
	 * @param  array $residue   beans that have been left untouched
	 *
	 * @return array $result 	new relational state
	 */
	protected function processGroups( $originals, $current, $additions, $trashcan, $residue ) {
		return array(
			array_merge($additions,array_diff($current,$originals)),
			array_merge($trashcan,array_diff($originals,$current)),
			array_merge($residue,array_intersect($current,$originals))
		);
	}
	/**
	 * Stores a bean in the database. This function takes a
	 * RedBean_OODBBean Bean Object $bean and stores it
	 * in the database. If the database schema is not compatible
	 * with this bean and RedBean runs in fluid mode the schema
	 * will be altered to store the bean correctly.
	 * If the database schema is not compatible with this bean and
	 * RedBean runs in frozen mode it will throw an exception.
	 * This function returns the primary key ID of the inserted
	 * bean.
	 *
	 * @throws RedBean_Exception_Security $exception
	 * @param RedBean_OODBBean $bean bean to store
	 *
	 * @return integer $newid
	 */
	public function store( RedBean_OODBBean $bean ) {
		$processLists = false;
		foreach($bean as $k=>$v) {
			if (is_array($v) || is_object($v)) { $processLists = true; break; }
		}
		if (!$processLists && !$bean->getMeta('tainted')) return $bean->getID();
	
		
		$this->signal( "update", $bean );
		foreach($bean as $k=>$v) {
			if (is_array($v) || is_object($v)) { $processLists = true; break; }
		}
		
		if ($processLists) {
		
		$sharedAdditions = $sharedTrashcan = $sharedresidue = $sharedItems = array();
		$ownAdditions = $ownTrashcan = $ownresidue = array();
		$tmpCollectionStore = array();
		$embeddedBeans = array();
		foreach($bean as $p=>$v) {
			if ($v instanceof RedBean_OODBBean) {
				$embtype = $v->getMeta('type');
				$idfield = $this->writer->getIDField($embtype);
				if (!$v->$idfield || $v->getMeta('tainted')) {
					$this->store($v);
				}
				$beanID = $v->$idfield;
				$linkField = $p.'_id';
				$bean->$linkField = $beanID;
				$bean->setMeta('cast.'.$linkField,'id');
				$embeddedBeans[$linkField] = $v;
				$tmpCollectionStore[$p]=$bean->$p;
				$bean->removeProperty($p);
			}
			if (is_array($v)) {
				$originals = $bean->getMeta('sys.shadow.'.$p);
				if (!$originals) $originals = array();
				if (strpos($p,'own')===0) {
					list($ownAdditions,$ownTrashcan,$ownresidue)=$this->processGroups($originals,$v,$ownAdditions,$ownTrashcan,$ownresidue);
					$bean->removeProperty($p);
				}
				elseif (strpos($p,'shared')===0) {
					list($sharedAdditions,$sharedTrashcan,$sharedresidue)=$this->processGroups($originals,$v,$sharedAdditions,$sharedTrashcan,$sharedresidue);
					$bean->removeProperty($p);
				}
				else {
				}
			}
		}
		}
		if (!$this->isFrozen) $this->check($bean);
		
		$table = $bean->getMeta("type");
		$idfield = $this->writer->getIDField($table);
		if ($bean->getMeta('tainted')) {
		
		if (!$this->isFrozen && !$this->tableExists($table)) {
			$this->writer->createTable( $table );
			$bean->setMeta("buildreport.flags.created",true);
		}
		if (!$this->isFrozen) {
			$columns = $this->writer->getColumns($table) ;
		}
		
		$insertvalues = array();
		$insertcolumns = array();
		$updatevalues = array();
		foreach( $bean as $p=>$v ) {
			$origV = $v;
			if ($p!=$idfield) {
				if (!$this->isFrozen) {
					
					
					if ($bean->getMeta("cast.$p",-1)!==-1) {
						$cast = $bean->getMeta("cast.$p");
						if ($cast=="string") {
							$typeno = $this->writer->scanType("STRING");
						}
						elseif ($cast=="id") {
							$typeno = $this->writer->getTypeForID();
						}
						elseif(isset($this->writer->sqltype_typeno[$cast])) {
							$typeno = $this->writer->sqltype_typeno[$cast];
						}
						else {
							throw new RedBean_Exception("Invalid Cast");
						}
					}
					else {
						$cast = false;		
						
//						$typeno = $this->writer->scanType(&$v,true);
						$typeno = $this->writer->scanType($v,true);
						
					}
					
					if (isset($columns[$p])) {
						
						$v = $origV;
//						if (!$cast) $typeno = $this->writer->scanType(&$v,false);
						if (!$cast) $typeno = $this->writer->scanType($v,false);
						
						$sqlt = $this->writer->code($columns[$p]);
						if ($typeno > $sqlt) {
							
							$this->writer->widenColumn( $table, $p, $typeno );
							$bean->setMeta("buildreport.flags.widen",true);
						}
					}
					else {
						
						$this->writer->addColumn($table, $p, $typeno);
						$bean->setMeta("buildreport.flags.addcolumn",true);
						
						$this->processBuildCommands($table,$p,$bean);
					}
				}
				
				$insertvalues[] = $v;
				$insertcolumns[] = $p;
				$updatevalues[] = array( "property"=>$p, "value"=>$v );
			}
		}
		if (!$this->isFrozen && ($uniques = $bean->getMeta("buildcommand.unique"))) {
			foreach($uniques as $unique) {
				$this->writer->addUniqueIndex( $table, $unique );
			}
		}
		$rs = $this->writer->updateRecord( $table, $updatevalues, $bean->$idfield );
		$bean->$idfield = $rs;
		$bean->setMeta("tainted",false);
		}
		if ($processLists) {
		foreach($embeddedBeans as $linkField=>$embeddedBean) {
			if (!$this->isFrozen) {
				$this->writer->addIndex($bean->getMeta('type'),
							'index_foreignkey_'.$embeddedBean->getMeta('type'),
							 $linkField);
				$this->writer->addFK($bean->getMeta('type'),$embeddedBean->getMeta('type'),$linkField,$this->writer->getIDField($embeddedBean->getMeta('type')));
			}
		}
		$myFieldLink = $bean->getMeta('type').'_id';
		
		foreach($ownTrashcan as $trash) {
			if ($trash instanceof RedBean_OODBBean) {
				$trash->$myFieldLink = null;
				$this->store($trash);
			}
			else {
				throw new RedBean_Exception_Security('Array may only contain RedBean_OODBBeans');
			}
		}
		foreach($ownAdditions as $addition) {
			if ($addition instanceof RedBean_OODBBean) {
				$addition->$myFieldLink = $bean->$idfield;
				$addition->setMeta('cast.'.$myFieldLink,'id');
				$this->store($addition);
				if (!$this->isFrozen) {
					$this->writer->addIndex($addition->getMeta('type'),
						'index_foreignkey_'.$bean->getMeta('type'),
						 $myFieldLink);
					$this->writer->addFK($addition->getMeta('type'),$bean->getMeta('type'),$myFieldLink,$idfield);
				}
			}
			else {
				throw new RedBean_Exception_Security('Array may only contain RedBean_OODBBeans');
			}
		}
		foreach($ownresidue as $residue) {
			if ($residue instanceof RedBean_OODBBean) {
				if ($residue->getMeta('tainted')) {
					$this->store($residue);
				}
			}
			else {
				throw new RedBean_Exception_Security('Array may only contain RedBean_OODBBeans');
			}
		}
		foreach($sharedTrashcan as $trash) {
			if ($trash instanceof RedBean_OODBBean) {
				$this->assocManager->unassociate($trash,$bean);
			}
			else {
				throw new RedBean_Exception_Security('Array may only contain RedBean_OODBBeans');
			}
		}
		foreach($sharedAdditions as $addition) {
			if ($addition instanceof RedBean_OODBBean) {
				$this->assocManager->associate($addition,$bean);
			}
			else {
				throw new RedBean_Exception_Security('Array may only contain RedBean_OODBBeans');
			}
		}
		foreach($sharedresidue as $residue) {
			if ($residue instanceof RedBean_OODBBean) {
				$this->store($residue);
			}
			else {
				throw new RedBean_Exception_Security('Array may only contain RedBean_OODBBeans');
			}
		}
		}
		$this->signal( "after_update", $bean );
		return (int) $bean->$idfield;
	}
	/**
	 * Loads a bean from the object database.
	 * It searches for a RedBean_OODBBean Bean Object in the
	 * database. It does not matter how this bean has been stored.
	 * RedBean uses the primary key ID $id and the string $type
	 * to find the bean. The $type specifies what kind of bean you
	 * are looking for; this is the same type as used with the
	 * dispense() function. If RedBean finds the bean it will return
	 * the RedBean_OODB Bean object; if it cannot find the bean
	 * RedBean will return a new bean of type $type and with
	 * primary key ID 0. In the latter case it acts basically the
	 * same as dispense().
	 * If the bean cannot be found in the database a new bean of
	 * the specified type will be generated and returned.
	 * @param string $type
	 * @param integer $id
	 * @return RedBean_OODBBean $bean
	 */
	public function load($type, $id) {
		$this->signal("before_open",array("type"=>$type,"id"=>$id));
		$bean = $this->dispense( $type );
		if ($this->stash && isset($this->stash[$id])) {
			$row = $this->stash[$id];
		}
		else {
			try {
				$idfield = $this->writer->getIDField($type);
				$rows = $this->writer->selectRecord($type,array($idfield=>array($id)));
			}catch(RedBean_Exception_SQL $e ) {
				if (
				$this->writer->sqlStateIn($e->getSQLState(),
				array(
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
				)
				) {
					$rows = 0;
					if ($this->isFrozen) throw $e; 
				}
				else throw $e;
			}
			if (!$rows) return $bean; 
			$row = array_pop($rows);
		}
		foreach($row as $p=>$v) {
			
			$bean->$p = $v;
		}
		$this->signal( "open", $bean );
		$bean->setMeta("tainted",false);
		return $bean;
	}
	/**
	 * Removes a bean from the database.
	 * This function will remove the specified RedBean_OODBBean
	 * Bean Object from the database.
	 * @throws RedBean_Exception_Security $exception
	 * @param RedBean_OODBBean $bean
	 */
	public function trash( RedBean_OODBBean $bean ) {
		$idfield = $this->writer->getIDField($bean->getMeta("type"));
		$this->signal( "delete", $bean );
		foreach($bean as $p=>$v) {
			if ($v instanceof RedBean_OODBBean) {
				$bean->removeProperty($p);
			}
			if (is_array($v)) {
				if (strpos($p,'own')===0) {
					$bean->removeProperty($p);
				}
				elseif (strpos($p,'shared')===0) {
					$bean->removeProperty($p);
				}
			}
		}
		if (!$this->isFrozen) $this->check( $bean );
		try {
			$this->writer->selectRecord($bean->getMeta("type"),
				array($idfield => array( $bean->$idfield) ),null,true );
		}catch(RedBean_Exception_SQL $e) {
			if (!$this->writer->sqlStateIn($e->getSQLState(),
			array(
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
			)) throw $e;
		}
		$bean->$idfield = 0;
		$this->signal( "after_delete", $bean );
	}
	/**
	 * Loads and returns a series of beans of type $type.
	 * The beans are loaded all at once.
	 * The beans are retrieved using their primary key IDs
	 * specified in the second argument.
	 * @throws RedBean_Exception_Security $exception
	 * @param string $type
	 * @param array $ids
	 * @return array $beans
	 */
	public function batch( $type, $ids ) {
		if (!$ids) return array();
		$collection = array();
		try {
			$idfield = $this->writer->getIDField($type);
			$rows = $this->writer->selectRecord($type,array($idfield=>$ids));
		}catch(RedBean_Exception_SQL $e) {
			if (!$this->writer->sqlStateIn($e->getSQLState(),
			array(
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
			)) throw $e;
			$rows = false;
		}
		$this->stash = array();
		if (!$rows) return array();
		foreach($rows as $row) {
			$this->stash[$row[$this->writer->getIDField($type)]] = $row;
		}
		foreach($ids as $id) {
			$collection[ $id ] = $this->load( $type, $id );
		}
		$this->stash = NULL;
		return $collection;
	}
	/**
	 * This is a convenience method; it converts database rows
	 * (arrays) into beans.
	 * @param string $type
	 * @param array $rows
	 * @return array $collectionOfBeans
	 */
	public function convertToBeans($type, $rows) {
		$collection = array();
		$this->stash = array();
		foreach($rows as $row) {
			$id = $row[$this->writer->getIDField($type)];
			$this->stash[$id] = $row;
			$collection[ $id ] = $this->load( $type, $id );
		}
		$this->stash = NULL;
		return $collection;
	}
	/**
	 * Returns the number of beans we have in DB of a given type.
	 *
	 * @param string $type type of bean we are looking for
	 *
	 * @return integer $num number of beans found
	 */
	public function count($type) {
		try {
			return (int) $this->writer->count($type);
		}catch(RedBean_Exception_SQL $e) {
			if (!$this->writer->sqlStateIn($e->getSQLState(),
			array(RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
			)) throw $e;
		}
		return 0;
	}
	/**
	 * Trash all beans of a given type.
	 *
	 * @param string $type type
	 *
	 * @return boolean $yesNo whether we actually did some work or not..
	 */
	public function wipe($type) {
		try {
			$this->writer->wipe($type);
			return true;
		}catch(RedBean_Exception_SQL $e) {
			if (!$this->writer->sqlStateIn($e->getSQLState(),
			array(RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
			)) throw $e;
		}
		return false;
	}
	/**
	 * Returns an Association Manager for use with OODB.
	 *
	 * @throws Exception
	 * @return RedBean_AssociationManager $assoc Assoction Manager
	 */
	public function getAssociationManager() {
		if (!isset($this->assocManager)) throw new Exception("No association manager available.");
		return $this->assocManager;
	}
	/**
	 * @param RedBean_AssociationManager $assoc
	 * @return void
	 */
	public function setAssociationManager(RedBean_AssociationManager $assoc) {
		$this->assocManager = $assoc;
	}
}

/**
 * ToolBox
 * Contains most important redbean tools
 * @file			RedBean/ToolBox.php
 * @description		The ToolBox acts as a resource locator for RedBean but can
 *					be integrated in larger resource locators (nested).
 *					It does not do anything more than just store the three most
 *					important RedBean resources (tools): the database adapter,
 *					the redbean core class (oodb) and the query writer.
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_ToolBox {
	/**
	 *
	 * @var RedBean_OODB
	 */
	protected $oodb;
	/**
	 *
	 * @var RedBean_QueryWriter
	 */
	protected $writer;
	/**
	 *
	 * @var RedBean_Adapter_DBAdapter
	 */
	protected $adapter;
	/**
	 * Constructor.
	 * The Constructor of the ToolBox takes three arguments: a RedBean_OODB $redbean
	 * object database, a RedBean_Adapter $databaseAdapter and a
	 * RedBean_QueryWriter $writer. It stores these objects inside and acts as
	 * a micro service locator. You can pass the toolbox to any object that needs
	 * one of the RedBean core objects to interact with.
	 *
	 * @param RedBean_OODB              $oodb    Object Database
	 * @param RedBean_Adapter_DBAdapter $adapter Adapter
	 * @param RedBean_QueryWriter       $writer  Writer
	 *
	 * return RedBean_ToolBox $toolbox Toolbox
	 */
	public function __construct( RedBean_OODB $oodb, RedBean_Adapter $adapter, RedBean_QueryWriter $writer ) {
		$this->oodb = $oodb;
		$this->adapter = $adapter;
		$this->writer = $writer;
		return $this;
	}
	/**
	 * The Toolbox acts as a kind of micro service locator, providing just the
	 * most important objects that make up RedBean. You can pass the toolkit to
	 * any object that needs one of these objects to function properly.
	 * Returns the QueryWriter; normally you do not use this object but other
	 * object might want to use the default RedBean query writer to be
	 * database independent.
	 *
	 * @return RedBean_QueryWriter $writer writer
	 */
	public function getWriter() {
		return $this->writer;
	}
	/**
	 * The Toolbox acts as a kind of micro service locator, providing just the
	 * most important objects that make up RedBean. You can pass the toolkit to
	 * any object that needs one of these objects to function properly.
	 * Retruns the RedBean OODB Core object. The RedBean OODB object is
	 * the ultimate core of Redbean. It provides the means to store and load
	 * beans. Extract this object immediately after invoking a kickstart method.
	 *
	 * @return RedBean_OODB $oodb Object Database
	 */
	public function getRedBean() {
		return $this->oodb;
	}
	/**
	 * The Toolbox acts as a kind of micro service locator, providing just the
	 * most important objects that make up RedBean. You can pass the toolkit to
	 * any object that needs one of these objects to function properly.
	 * Returns the adapter. The Adapter can be used to perform queries
	 * on the database directly.
	 *
	 * @return RedBean_Adapter_DBAdapter $adapter Adapter
	 */
	public function getDatabaseAdapter() {
		return $this->adapter;
	}
}
/**
 * RedBean Association
 * @file				RedBean/AssociationManager.php
 * @description	Manages simple bean associations.
 *
 * @author			Gabor de Mooij
 * @license			BSD
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_AssociationManager extends RedBean_Observable {
	/**
	 * Contains a reference to the Object Database OODB
	 * @var RedBean_OODB
	 */
	protected $oodb;
	/**
	 * Contains a reference to the Database Adapter
	 * @var RedBean_Adapter_DBAdapter
	 */
	protected $adapter;
	/**
	 * Contains a reference to the Query Writer
	 * @var RedBean_QueryWriter
	 */
	protected $writer;
	protected $flagUseConstraints = true;
	/**
	 * Constructor
	 *
	 * @param RedBean_ToolBox $tools toolbox
	 */
	public function __construct( RedBean_ToolBox $tools ) {
		$this->oodb = $tools->getRedBean();
		$this->adapter = $tools->getDatabaseAdapter();
		$this->writer = $tools->getWriter();
		$this->toolbox = $tools;
	}
	/**
	 * Creates a table name based on a types array.
	 *
	 * @param array $types types
	 *
	 * @return string $table table
	 */
	public function getTable( $types ) {
		return $this->writer->getAssocTableFormat($types);
	}
	/**
	 * Associates two beans with eachother.
	 *
	 * @param RedBean_OODBBean $bean1 bean1
	 * @param RedBean_OODBBean $bean2 bean2
	 */
	public function associate(RedBean_OODBBean $bean1, RedBean_OODBBean $bean2) {
		$table = $this->getTable( array($bean1->getMeta("type") , $bean2->getMeta("type")) );
		$bean = $this->oodb->dispense($table);
		return $this->associateBeans( $bean1, $bean2, $bean );
	}
	/**
	 * Whether to use constraints
	 *
	 * @param  boolean $trueFalse yesno
	 *
	 * @return void
	 */
	public function setUseConstraints( $trueFalse ) {
		$this->flagUseConstraints = $trueFalse;
	}
	/**
	 * Associates a pair of beans. This method associates two beans, no matter
	 * what types.
	 *
	 * @param RedBean_OODBBean $bean1 first bean
	 * @param RedBean_OODBBean $bean2 second bean
	 * @param RedBean_OODBBean $bean  base bean
	 *
	 * @return mixed $id either the link ID or null
	 */
	protected function associateBeans(RedBean_OODBBean $bean1, RedBean_OODBBean $bean2, RedBean_OODBBean $bean) {
		$idfield1 = $this->writer->getIDField($bean1->getMeta("type"));
		$idfield2 = $this->writer->getIDField($bean2->getMeta("type"));
		$property1 = $bean1->getMeta("type") . "_id";
		$property2 = $bean2->getMeta("type") . "_id";
		if ($property1==$property2) $property2 = $bean2->getMeta("type")."2_id";
		
		$bean->setMeta("buildcommand.unique" , array(array($property1, $property2)));
		
		$indexName1 = "index_for_".$bean->getMeta("type")."_".$property1;
		$indexName2 = "index_for_".$bean->getMeta("type")."_".$property2;
		$bean->setMeta("buildcommand.indexes", array($property1=>$indexName1,$property2=>$indexName2));
		$this->oodb->store($bean1);
		$this->oodb->store($bean2);
		$bean->setMeta("assoc.".$bean1->getMeta("type"),$bean1);
		$bean->setMeta("assoc.".$bean2->getMeta("type"),$bean2);
		$bean->setMeta("cast.$property1","id");
		$bean->setMeta("cast.$property2","id");
		$bean->$property1 = $bean1->$idfield1;
		$bean->$property2 = $bean2->$idfield2;
		try {
			$id = $this->oodb->store( $bean );
			
			if ($this->flagUseConstraints &&
				!$this->oodb->isFrozen() &&
				$bean->getMeta("buildreport.flags.created")){
				$bean->setMeta("buildreport.flags.created",0);
				if (!$this->oodb->isFrozen())
				$this->writer->addConstraint( $bean1, $bean2 );
			}
			return $id;
		}
		catch(RedBean_Exception_SQL $e) {
			if (!$this->writer->sqlStateIn($e->getSQLState(),
			array(
			RedBean_QueryWriter::C_SQLSTATE_INTEGRITY_CONSTRAINT_VIOLATION
			))) throw $e;
		}
	}
	/**
	 * Returns all ids of beans of type $type that are related to $bean. If the
	 * $getLinks parameter is set to boolean TRUE this method will return the ids
	 * of the association beans instead. You can also add additional SQL. This SQL
	 * will be appended to the original query string used by this method. Note that this
	 * method will not return beans, just keys. For a more convenient method see the R-facade
	 * method related(), that is in fact a wrapper for this method that offers a more
	 * convenient solution. If you want to make use of this method, consider the
	 * OODB batch() method to convert the ids to beans.
	 *
	 * @throws RedBean_Exception_SQL
	 *
	 * @param RedBean_OODBBean $bean     reference bean
	 * @param string           $type     target type
	 * @param bool             $getLinks whether you are interested in the assoc records
	 * @param bool             $sql      room for additional SQL
	 *
	 * @return array $ids
	 */
	public function related( RedBean_OODBBean $bean, $type, $getLinks=false, $sql=false) {
	$table = $this->getTable( array($bean->getMeta("type") , $type) );
		$idfield = $this->writer->getIDField($bean->getMeta("type"));
		if ($type==$bean->getMeta("type")) {
			$type .= "2";
			$cross = 1;
		}
		else $cross=0;
		if (!$getLinks) $targetproperty = $type."_id"; else $targetproperty="id";
		$property = $bean->getMeta("type")."_id";
		try {
				$sqlFetchKeys = $this->writer->selectRecord(
					  $table,
					  array( $property => array( $bean->$idfield ) ),
					  $sql,
					  false
				);
				$sqlResult = array();
				foreach( $sqlFetchKeys as $row ) {
					$sqlResult[] = $row[$targetproperty];
				}
				if ($cross) {
					$sqlFetchKeys2 = $this->writer->selectRecord(
							  $table,
							  array( $targetproperty => array( $bean->$idfield ) ),
							  $sql,
							  false
					);
					foreach( $sqlFetchKeys2 as $row ) {
						$sqlResult[] = $row[$property];
					}
				}
			return $sqlResult; 
		}catch(RedBean_Exception_SQL $e) {
			if (!$this->writer->sqlStateIn($e->getSQLState(),
			array(
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
			)) throw $e;
			return array();
		}
	}
	/**
	 * Breaks the association between two beans. This method unassociates two beans. If the
	 * method succeeds the beans will no longer form an association. In the database
	 * this means that the association record will be removed. This method uses the
	 * OODB trash() method to remove the association links, thus giving FUSE models the
	 * opportunity to hook-in additional business logic. If the $fast parameter is
	 * set to boolean TRUE this method will remove the beans without their consent,
	 * bypassing FUSE. This can be used to improve performance.
	 *
	 * @param RedBean_OODBBean $bean1 first bean
	 * @param RedBean_OODBBean $bean2 second bean
	 * @param boolean          $fast  If TRUE, removes the entries by query without FUSE
	 */
	public function unassociate(RedBean_OODBBean $bean1, RedBean_OODBBean $bean2, $fast=null) {
		$this->oodb->store($bean1);
		$this->oodb->store($bean2);
		$table = $this->getTable( array($bean1->getMeta("type") , $bean2->getMeta("type")) );
		$idfield1 = $this->writer->getIDField($bean1->getMeta("type"));
		$idfield2 = $this->writer->getIDField($bean2->getMeta("type"));
		$type = $bean1->getMeta("type");
		if ($type==$bean2->getMeta("type")) {
			$type .= "2";
			$cross = 1;
		}
		else $cross = 0;
		$property1 = $type."_id";
		$property2 = $bean2->getMeta("type")."_id";
		$value1 = (int) $bean1->$idfield1;
		$value2 = (int) $bean2->$idfield2;
		try {
			$rows = $this->writer->selectRecord($table,array(
				$property1 => array($value1), $property2=>array($value2)),null,$fast
			);
			if ($cross) {
				$rows2 = $this->writer->selectRecord($table,array(
				$property2 => array($value1), $property1=>array($value2)),null,$fast
				);
				if ($fast) return;
				$rows = array_merge($rows,$rows2);
			}
			if ($fast) return;
			$beans = $this->oodb->convertToBeans($table,$rows);
			foreach($beans as $link) {
				$link->setMeta("assoc.".$bean1->getMeta("type"),$bean1);
				$link->setMeta("assoc.".$bean2->getMeta("type"),$bean2);
				$this->oodb->trash($link);
			}
		}catch(RedBean_Exception_SQL $e) {
			if (!$this->writer->sqlStateIn($e->getSQLState(),
			array(
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
			)) throw $e;
		}
		return;
	}
	/**
	 * Removes all relations for a bean. This method breaks every connection between
	 * a certain bean $bean and every other bean of type $type. Warning: this method
	 * is really fast because it uses a direct SQL query however it does not inform the
	 * models about this. If you want to notify FUSE models about deletion use a foreach-loop
	 * with unassociate() instead. (that might be slower though)
	 *
	 * @param RedBean_OODBBean $bean reference bean
	 * @param string           $type type of beans that need to be unassociated
	 *
	 * @return void
	 */
	public function clearRelations(RedBean_OODBBean $bean, $type) {
		$this->oodb->store($bean);
		$table = $this->getTable( array($bean->getMeta("type") , $type) );
		$idfield = $this->writer->getIDField($bean->getMeta("type"));
		if ($type==$bean->getMeta("type")) {
			$property2 = $type."2_id";
			$cross = 1;
		}
		else $cross = 0;
		$property = $bean->getMeta("type")."_id";
		try {
			$this->writer->selectRecord( $table, array($property=>array($bean->$idfield)),null,true);
			if ($cross) {
				$this->writer->selectRecord( $table, array($property2=>array($bean->$idfield)),null,true);
			}
		}catch(RedBean_Exception_SQL $e) {
			if (!$this->writer->sqlStateIn($e->getSQLState(),
			array(
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
			)) throw $e;
		}
	}
	/**
	 * Given two beans this function returns TRUE if they are associated using a
	 * many-to-many association, FALSE otherwise.
	 *
	 * @throws RedBean_Exception_SQL
	 *
	 * @param RedBean_OODBBean $bean1 bean
	 * @param RedBean_OODBBean $bean2 bean
	 *
	 * @return bool $related whether they are associated N-M
	 */
	public function areRelated(RedBean_OODBBean $bean1, RedBean_OODBBean $bean2) {
		if (!$bean1->getID() || !$bean2->getID()) return false;
		$table = $this->getTable( array($bean1->getMeta("type") , $bean2->getMeta("type")) );
		$idfield1 = $this->writer->getIDField($bean1->getMeta("type"));
		$idfield2 = $this->writer->getIDField($bean2->getMeta("type"));
		$type = $bean1->getMeta("type");
		if ($type==$bean2->getMeta("type")) {
			$type .= "2";
			$cross = 1;
		}
		else $cross = 0;
		$property1 = $type."_id";
		$property2 = $bean2->getMeta("type")."_id";
		$value1 = (int) $bean1->$idfield1;
		$value2 = (int) $bean2->$idfield2;
		try {
			$rows = $this->writer->selectRecord($table,array(
				$property1 => array($value1), $property2=>array($value2)),null
			);
			if ($cross) {
				$rows2 = $this->writer->selectRecord($table,array(
				$property2 => array($value1), $property1=>array($value2)),null
				);
				$rows = array_merge($rows,$rows2);
			}
		}catch(RedBean_Exception_SQL $e) {
			if (!$this->writer->sqlStateIn($e->getSQLState(),
			array(
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
			RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
			)) throw $e;
			return false;
		}
		return (count($rows)>0);
	}
}
/**
 * RedBean Extended Association
 * @file			RedBean/ExtAssociationManager.php
 * @description		Manages complex bean associations.
 *
 * @author			Gabor de Mooij
 * @license			BSD
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_ExtAssociationManager extends RedBean_AssociationManager {
	/**
	 * Associates two beans with eachother. This method connects two beans with eachother, just
	 * like the other associate() method in the Association Manager. The difference is however
	 * that this method accepts a base bean, this bean will be used as the basis of the
	 * association record in the link table. You can thus add additional properties and
	 * even foreign keys.
	 *
	 * @param RedBean_OODBBean $bean1 bean 1
	 * @param RedBean_OODBBean $bean2 bean 2
	 * @param RedBean_OODBBean $bbean base bean for association record
	 *
	 * @return void
	 *
	 */
	public function extAssociate(RedBean_OODBBean $bean1, RedBean_OODBBean $bean2, RedBean_OODBBean $baseBean ) {
		$table = $this->getTable( array($bean1->getMeta("type") , $bean2->getMeta("type")) );
		$baseBean->setMeta("type", $table );
		return $this->associateBeans( $bean1, $bean2, $baseBean );
	}
}
/**
 * @name RedBean View Manager
 * @file RedBean
 * @author Gabor de Mooij and the RedBean Team
 * @copyright Gabor de Mooij (c)
 * @license BSD
 *
 * The ViewManager creates on the fly views for easy querying.
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_ViewManager {
	/**
	 * @var RedBean_OODB
	 */
	protected $oodb;
	/**
	 * @var RedBean_Adapter_DBAdapter
	 */
	protected $adapter;
	/**
	 * @var RedBean_QueryWriter
	 */
	protected $writer;
	/**
	 * Constructor
	 *
	 * @param RedBean_ToolBox $tools toolbox
	 */
	public function __construct( RedBean_ToolBox $tools ) {
		$this->oodb = $tools->getRedBean();
		$this->adapter = $tools->getDatabaseAdapter();
		$this->writer = $tools->getWriter();
	}
	/**
	 * Creates a view with name $viewID based on $refType bean type
	 * and then left-joining the specified types in $types in the given
	 * order.
	 *
	 * @param  string $viewID  desired name of the view
	 * @param  string $refType first bean type to be used as base
	 * @param  array  $types   array with types to be left-joined in view
	 *
	 * @return boolean $success whether we created a new view (false if already exists)
	 */
	public function createView( $viewID, $refType, $types ) {
		if ($this->oodb->isFrozen()) return false;
		$history = array();
		$tables = array_flip( $this->writer->getTables() );
		$refTable = $refType; 
		$currentTable = $refTable;
		$history[$refType] = $refType;
		foreach($types as $t) {
			if (!isset($history[$t])){
				$history[$t] = $t;
				$connection = array($t,$currentTable);
				sort($connection);
				$connection = implode("_", $connection);
				$connectionTable = $this->writer->safeTable($connection,true);
				if (isset($tables[$connectionTable])) {
					
					$srcPoint = $this->writer->safeTable($connection).".".$this->writer->safeColumn($currentTable."_id"); 
					$dstPoint = $this->writer->safeTable($currentTable).".".$this->writer->safeColumn($this->writer->getIDField($currentTable)); 
					$joins[$connection] = array($srcPoint,$dstPoint);
					
					$srcPoint = $this->writer->safeTable($connection).".".$this->writer->safeColumn($t."_id");
					$dstPoint = $this->writer->safeTable($t).".".$this->writer->safeColumn($this->writer->getIDField($t));
					$joins[$t] = array($srcPoint,$dstPoint);
				}
				else {
					
					$srcPoint = $this->writer->safeTable($t).".".$this->writer->safeColumn($currentTable."_id");
					$dstPoint = $this->writer->safeTable($currentTable).".".$this->writer->safeColumn($this->writer->getIDField($currentTable));
					$joins[$t] = array($srcPoint,$dstPoint);
				}
			}
			
			$currentTable=$t;
		}
		try{
			$rs = (boolean) $this->writer->createView($refType,$joins,$viewID);
		}
		catch(Exception $e) {
			throw new RedBean_Exception_SQL('Could not create view, types does not seem related (yet)..');
		}
		return $rs;
	}
}

/**
 * RedBean Setup
 * Helper class to quickly setup RedBean for you
 * @file 		RedBean/Setup.php
 * @description		Helper class to quickly setup RedBean for you
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_Setup {
	/**
	 *
	 * @var array
	 * Keeps track of the observers
	 */
	private static $observers = array();
	/**
	 *
	 * @var RedBean_ToolBox $toolbox
	 */
	private static $toolbox = NULL;
	/**
	 * This method checks the DSN string. If the DSN string contains a
	 * database name that is not supported by RedBean yet then it will
	 * throw an exception RedBean_Exception_NotImplemented. In any other
	 * case this method will just return boolean TRUE.
	 * @throws RedBean_Exception_NotImplemented
	 * @param string $dsn
	 * @return boolean $true
	 */
	private static function checkDSN($dsn) {
		$dsn = trim($dsn);
		$dsn = strtolower($dsn);
		if (
		strpos($dsn, "mysql:")!==0
				  && strpos($dsn,"sqlite:")!==0
				  && strpos($dsn,"pgsql:")!==0
		) {
			trigger_error("
					Support for this DSN has not been implemented yet. \n
					Begin your DSN with: 'mysql:' or 'sqlite:'
				");
		}
		else {
			return true;
		}
	}
	/**
	 * Generic Kickstart method.
	 * This is the generic kickstarter. It will establish a database connection
	 * using the $dsn, the $username and the $password you provide.
	 * If $frozen is boolean TRUE it will start RedBean in frozen mode, meaning
	 * that the database cannot be altered. If RedBean is started in fluid mode
	 * it will adjust the schema of the database if it detects an
	 * incompatible bean.
	 * This method returns a RedBean_Toolbox $toolbox filled with a
	 * RedBean_Adapter, a RedBean_QueryWriter and most importantly a
	 * RedBean_OODB; the object database. To start storing beans in the database
	 * simply say: $redbean = $toolbox->getRedBean(); Now you have a reference
	 * to the RedBean object.
	 * Optionally instead of using $dsn you may use an existing PDO connection.
	 * Example: RedBean_Setup::kickstart($existingConnection, true);
	 *
	 * @param  string|PDO $dsn      Database Connection String
	 * @param  string     $username Username for database
	 * @param  string     $password Password for database
	 * @param  boolean    $frozen   Start in frozen mode?
	 *
	 * @return RedBean_ToolBox $toolbox
	 */
	public static function kickstart( $dsn, $username=NULL, $password=NULL, $frozen=false ) {
		if ($dsn instanceof PDO) {
			$pdo = new RedBean_Driver_PDO($dsn);
			$dsn = $pdo->getDatabaseType() ;
		}
		else {
			self::checkDSN($dsn);
			$pdo = new RedBean_Driver_PDO( $dsn,$username,$password );
		}
		$adapter = new RedBean_Adapter_DBAdapter( $pdo );
		if (strpos($dsn,"pgsql")===0) {
			$writer = new RedBean_QueryWriter_PostgreSQL( $adapter );
		}
		else if (strpos($dsn,"sqlite")===0) {
			$writer = new RedBean_QueryWriter_SQLiteT( $adapter );
		}
		else {
			$writer = new RedBean_QueryWriter_MySQL( $adapter );
		}
		$redbean = new RedBean_OODB( $writer );
		if ($frozen) $redbean->freeze(true);
		$toolbox = new RedBean_ToolBox( $redbean, $adapter, $writer );
		
		self::$toolbox = $toolbox;
		return self::$toolbox;
	}
	/**
	 * During a kickstart method observers may be attached to the RedBean_OODB object.
	 * Setup keeps track of the observers that are connected to RedBean.
	 * Returns the observers that have been attached by Setup.
	 * @return array $observers
	 */
	public static function getAttachedObservers() {
		return self::$observers;
	}
}

/**
 * @name RedBean IBeanFormatter
 * @file RedBean/IBeanFormatter.php
 * @author Gabor de Mooij and the RedBean Team
 * @copyright Gabor de Mooij (c)
 * @license BSD
 *
 * The RedBean IBeanFormatter interface describes what methods
 * a BeanFormatter class should implement.
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
interface RedBean_IBeanFormatter {
	/**
	 * Bean Table mapper.
	 * Formats a bean table. Given a type this function returns the name of the
	 * table to be used for querying this type of bean.
	 * This allows you to map a certain type of bean to a specified table.
	 *
	 * @param string $type type
	 *
	 * @return string $table table
	 */
	public function formatBeanTable( $type );
	/**
	 *
	 * Formats the primary key field for a certain type of bean. Given a type
	 * this function returns the ID field to be used for that type.
	 *
	 * @param string $type type
	 *
	 * @return string $id id
	 */
	public function formatBeanID( $type );
	/**
	 * Given a type, this function returns an alias.
	 * This function is used to resolve aliased types; for instance
	 * a leader is an alias of type person etc.
	 *
	 * @param  string $type type
	 *
	 * @return string $alias alias
	 */
	public function getAlias( $type );
}
/**
 * Default Bean Formatter
 *
 * @file				RedBean/QueryWriter/SQLite.php
 * @description			Default Bean Formatter
 * 						Specifies the default rules for formatting beans in
 * 						the database; converting them to tables and columns.
 * @author				Gabor de Mooij
 * @license				BSD
 */
class RedBean_DefaultBeanFormatter implements RedBean_IBeanFormatter {
	/**
	 * Holds the prefix to be used for tables.
	 * @var string
	 */
	protected $tablePrefixStr = '';
	/**
	 * Sets the prefix to be used for tables
	 *
	 * @param string $tablePrefixStr prefix string for tables
	 */
	public function setPrefix($prefix) {
		$this->tablePrefixStr = preg_replace('/\W/','',$prefix);
	}
	/**
	 * Formats a table
	 *
	 * @param string $type type
	 */
	public function formatBeanTable( $type ){
		return $this->tablePrefixStr.$type;
	}
	/**
	 * Formats an ID
	 *
	 * @param string $type type
	 */
	public function formatBeanID( $type ){
		return 'id';
	}
	/**
	 * Returns the alias for a type
	 *
	 * @param  $type aliased type
	 *
	 * @return string $type type
	 */
	public function getAlias( $type ) {
		if ($t = RedBean_OODBBean::$fetchType) {
			$type = $t;
			RedBean_OODBBean::$fetchType = null;
		}
		return $type;
	}
}

/*
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 * Interface definition of a Model Formatter for Fuse
 */
interface RedBean_IModelFormatter {
	/**
	 * ModelHelper will call this method of the class
	 * you provide to discover the model
	 *
	 * @param string $model
	 *
	 * @return string $formattedModel
	 */
	public function formatModel( $model );
}

/**
 * @name RedBean IBeanHelper
 * @file RedBean/IBeanHelper.php
 * @author Gabor de Mooij and the RedBean Team
 * @copyright Gabor de Mooij (c)
 * @license BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
interface RedBean_IBeanHelper {
	/**
	 * @abstract
	 * @return RedBean_Toolbox $toolbox toolbox
	 */
	public function getToolbox();
}

/**
 * RedBean Bean Helper
 * @file			RedBean/BeanHelperFacade.php
 * @description
 *
 * @author			Gabor de Mooij
 * @license			BSD
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_BeanHelperFacade implements RedBean_IBeanHelper {
	/**
	 * @return RedBean_ToolBox $toolbox
	 */
	public function getToolbox() {
		return RedBean_Facade::$toolbox;
	}
}

/**
 * Query Logger
 *
 * @file 			RedBean/Plugin/QueryLogger.php
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_Plugin_QueryLogger implements RedBean_Observer {
	/**
	 * @var array
	 * contains log messages
	 */
	protected $logs = array();
	/**
	 * Creates a new instance of the Query Logger and attaches
	 * this logger to the adapter.
	 *
	 * @static
	 * @param RedBean_Observable $adapter the adapter you want to attach to
	 *
	 * @return RedBean_Plugin_QueryLogger $querylogger instance of the Query Logger
	 */
	public static function getInstanceAndAttach( RedBean_Observable $adapter ) {
		$queryLog = new RedBean_Plugin_QueryLogger;
		$adapter->addEventListener( "sql_exec", $queryLog );
		return $queryLog;
	}
	/**
	 * Singleton pattern
	 * Constructor - private
	 */
	private function __construct(){}
	/**
	 * Implementation of the onEvent() method for Observer interface.
	 * If a query gets executed this method gets invoked because the
	 * adapter will send a signal to the attached logger.
	 *
	 * @param  string $eventName          ID of the event (name)
	 * @param  RedBean_DBAdapter $adapter adapter that sends the signal
	 *
	 * @return void
	 */
	public function onEvent( $eventName, $adapter ) {
		if ($eventName=="sql_exec") {
			$sql = $adapter->getSQL();
			$this->logs[] = $sql;
		}
	}
	/**
	 * Searches the logs for the given word and returns the entries found in
	 * the log container.
	 *
	 * @param  string $word word to look for
	 *
	 * @return array $entries entries that contain the keyword
	 */
	public function grep( $word ) {
		$found = array();
		foreach($this->logs as $log) {
			if (strpos($log,$word)!==false) {
				$found[] = $log;
			}
		}
		return $found;
	}
	/**
	 * Returns all the logs.
	 *
	 * @return array $logs logs
	 */
	public function getLogs() {
		return $this->logs;
	}
	/**
	 * Clears the logs.
	 *
	 * @return void
	 */
	public function clear() {
		$this->logs = array();
	}
}

/**
 * Recursive Bean Export
 *
 * @file 			RedBean/Plugin/BeanExport.php
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_Plugin_BeanExport {
	/**
	 * @var null|\RedBean_Toolbox
	 */
	protected $toolbox = null;
	/**
	 * @var array
	 * Array used to check for recursion. This avoids infinite loops.
	 */
	protected $recurCheck = array();
	
	/**
	 * @var array
	 * Recursion shield for types
	 */
	protected $recurTypeCheck = array();
	
	/**
	 * @var boolean
	 * Whether to use a type shield for recursion
	 */
	protected $typeShield = false;
	
	/**
	 * @var integer
	 * Current level of recursion depth
	 */
	protected $depth = 0;
	
	/**
	 * @var integer
	 * Maximum level of recursions allowed by user
	 */
	protected $maxDepth = false;
	/**
	 * Constructor
	 * @param RedBean_Toolbox $toolbox
	 */
	public function __construct( RedBean_Toolbox $toolbox ) {
		$this->toolbox = $toolbox;
	}
	/**
	 * Loads Schema
	 * @return void
	 */
	public function loadSchema() {
		$tables = array_flip($this->toolbox->getWriter()->getTables());
		foreach($tables as $table=>$columns) {
			try{
				$tables[$table] = $this->toolbox->getWriter()->getColumns($table);
			}
			catch(RedBean_Exception_SQL $e) {
				$tables[$table] = array();
			}
		}
		$this->tables = $tables;
	}
	/**
	 *Returs a serialized representation of the schema
	 *
	 *@return string $serialized serialized representation
	 */
	public function getSchema() {
		return serialize($this->tables);
	}
	/**
	 * Loads a schema from a string (containing serialized export of schema)
	 *
	 * @param string $schema
	 */
	public function loadSchemaFromString($schema) {
		$this->tables = unserialize($schema);
	}
	/**
	 * Exports a collection of beans
	 *
	 * @param	mixed $beans 	  Either array or RedBean_OODBBean
	 * @param	bool  $resetRecur Whether we need to reset the recursion check array (first time only)
	 *
	 * @return	array $export Exported beans
	 */
	public function export( $beans, $resetRecur=true ) {
		
		if ($resetRecur) {
			$this->recurCheck = array();
		}
		if (!is_array($beans)) {
			$beans = array($beans);
		}
		
		if ($this->maxDepth!==false) {
			$this->depth ++;
			if ($this->depth > $this->maxDepth) {
				$this->depth--; 
				return array();
			}
		}
		
		if ($this->typeShield===true) {
			if (count($beans)>0) {
				$firstBean = reset($beans);
				$type = $firstBean->getMeta('type');
				if (isset($this->recurTypeCheck[$type])){
					if ($this->maxDepth!==false) {
						$this->depth --;
					}
					return array();
				}
				$this->recurTypeCheck[ $type ] = true;
			}
		}
		
		
		
		$export = array();
		foreach($beans as $bean) {
			$export[$bean->getID()] = $this->exportBean( $bean );
		}
		
		if ($this->maxDepth!==false) {
			$this->depth --;
		}
		
		return $export;
	}
	
	
	/**
	 * Exports beans, just like export() but with additional
	 * parameters for limitation on recursion and depth.
	 * 
	 * @param array   		  $beans      beans to export
	 * @param boolean 		  $typeShield whether to use a type recursion shield
	 * @param boolean|integer $depth      maximum number of iterations allowed (boolean FALSE to turn off)
	 */
	public function exportLimited($beans, $typeShield = true, $depth = false) {
		$this->depth = 0;
		$this->maxDepth = $depth;
		$this->typeShield = $typeShield;
		$export = $this->export($beans);
		$this->typeShield = false;
		$this->maxDepth = false;
		return $export;
	}
	
	/**
	 * Exports a single bean
	 *
	 * @param RedBean_OODBBean $bean Bean to be exported
	 *
	 * @return array|null $array Array export of bean
	 */
	public function exportBean(RedBean_OODBBean $bean) {
		$bid = $bean->getMeta('type').'-'.$bean->getID();
		if (isset($this->recurCheck[$bid])) return null;
		$this->recurCheck[$bid]=$bid;
		$export = $bean->export();
		foreach($export as $key=>$value) {
			if (strpos($key,'_id')!==false) {
				$sub = str_replace('_id','',$key);
				$subBean = $bean->$sub;
				if ($subBean) {
					$export[$sub] = $this->export($subBean, false);
				}
			}
		}
		$type = $bean->getMeta('type');
		$linkField = $type . '_id';
		
		foreach($this->tables as $table=>$cols) {
			if (strpos($table,'_')===false) {
				if (in_array($linkField,array_keys($cols))) {
					$field = 'own'.ucfirst($table);
					$export[$field] = self::export($bean->$field, false);
				}
			}
		}
		
		foreach($this->tables as $table=>$cols) {
			if (strpos($table,'_')!==false) {
				$parts = explode('_', $table);
				if (is_array($parts) && in_array($type,$parts)) {
					$other = $parts[0];
					if ($other==$type) $other=$parts[1];
					$field = 'shared'.ucfirst($other);
					$export[$field] = self::export($bean->$field, false);
				}
			}
		}
		return $export;
	}
}
/**
 * SimpleModel
 * @file 		RedBean/SimpleModel.php
 * @description	Part of FUSE
 * @author      Gabor de Mooij and the RedBeanPHP Team
 * @license		BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_SimpleModel {
	/**
	 * Contains the inner bean.
	 * @var RedBean_OODBBean
	 */
	protected $bean;
	/**
	 * Used by FUSE: the ModelHelper class to connect a bean to a model.
	 * This method loads a bean in the model.
	 *
	 * @param RedBean_OODBBean $bean bean
	 */
	public function loadBean( RedBean_OODBBean $bean ) {
		$this->bean = $bean;
	}
	/**
	 * Magic Getter to make the bean properties available from
	 * the $this-scope.
	 *
	 * @param string $prop property
	 *
	 * @return mixed $propertyValue value
	 */
	public function __get( $prop ) {
		return $this->bean->$prop;
	}
	/**
	 * Magic Setter
	 *
	 * @param string $prop  property
	 * @param mixed  $value value
	 */
	public function __set( $prop, $value ) {
		$this->bean->$prop = $value;
	}
	/**
	 * Isset implementation
	 *
	 * @param  string $key key
	 *
	 * @return
	 */
	public function __isset($key) {
		return (isset($this->bean->$key));
	}
	/**
	 *
	 * @param  $type
	 * @return mixed
	 */
	protected function getConnected($type) {
		return $this->bean->getMeta("assoc.$type");
	}
}
/*
 * ModelHelper
 * @author			Gabor de Mooij
 * @license			BSD
 *
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 * Interface definition of a Model Formatter for Fuse
 */
class RedBean_ModelHelper implements RedBean_Observer {
	/**
	 * Holds a model formatter
	 * @var RedBean_IModelFormatter
	 */
	private static $modelFormatter;
	/**
	 * Connects OODB to a model if a model exists for that
	 * type of bean. This connector is used in the facade.
	 *
	 * @param string $eventName
	 * @param RedBean_OODBBean $bean
	 */
	public function onEvent( $eventName, $bean ) {
		$bean->$eventName();
	}
	/**
	 * Given a model ID (model identifier) this method returns the
	 * full model name.
	 *
	 * @param string $model
	 * @return string $fullname
	 */
	public static function getModelName( $model ) {
		if (self::$modelFormatter){
			return self::$modelFormatter->formatModel($model);
		}
		else {
			return "Model_".ucfirst($model);
		}
	}
	/**
	 * Sets the model formatter to be used to discover a model
	 * for Fuse.
	 *
	 * @param string $modelFormatter
	 */
	public static function setModelFormatter( RedBean_IModelFormatter $modelFormatter ) {
		self::$modelFormatter = $modelFormatter;
	}
}

class RedBean_SQLHelper {
	public function __call( $funcName, $args=array() ) {
		return RedBean_Facade::$adapter->getCell('SELECT '.$funcName.'('.implode(',',$args).')');	
	}
}
/**
 * RedBean Facade
 * @file				RedBean/Facade.php
 * @description	Convenience class for RedBeanPHP.
 *						This class hides the object landscape of
 *						RedBean behind a single letter class providing
 *						almost all functionality with simple static calls.
 *
 * @author			Gabor de Mooij
 * @license			BSD
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 *
 */
class RedBean_Facade {
	/**
	 * Collection of toolboxes
	 * @var array
	 */
	public static $toolboxes = array();
	/**
	 *
	 * Constains an instance of the RedBean Toolbox
	 * @var RedBean_ToolBox
	 *
	 */
	public static $toolbox;
	/**
	 * Constains an instance of RedBean OODB
	 * @var RedBean_OODB
	 */
	public static $redbean;
	/**
	 * Contains an instance of the Query Writer
	 * @var RedBean_QueryWriter
	 */
	public static $writer;
	/**
	 * Contains an instance of the Database
	 * Adapter.
	 * @var RedBean_DBAdapter
	 */
	public static $adapter;
	/**
	 * Contains an instance of the Association Manager
	 * @var RedBean_AssociationManager
	 */
	public static $associationManager;
	/**
	 * Contains an instance of the Extended Association Manager
	 * @var RedBean_ExtAssociationManager
	 */
	public static $extAssocManager;
	/**
	 * Holds an instance of Bean Exporter
	 * @var RedBean_Plugin_BeanExport
	 */
	public static $exporter;
	/**
	 * Holds the Key of the current database.
	 * @var string
	 */
	public static $currentDB = "";
	
	/**
	 * Holds reference to SQL Helper
	 */
	public static $f;
	/**
	 * Returns version ID string
	 * Version No format: <Major>.<Minor>.<Maintenance>.<Fix/Update>
	 *
	 * @return string $version Version ID
	 */
	public static function getVersion() {
		return "2.2";
	}
	/**
	 * Kickstarts redbean for you. This method should be called before you start using
	 * RedBean. The Setup() method can be called without any arguments, in this case it will
	 * try to create a SQLite database in /tmp called red.db (this only works on UNIX-like systems).
	 *
	 * @param string $dsn      Database connection string
	 * @param string $username Username for database
	 * @param string $password Password for database
	 *
	 * @return void
	 */
	public static function setup( $dsn="sqlite:/tmp/red.db", $username=NULL, $password=NULL ) {
		self::$f = new RedBean_SQLHelper();
		$facadeInstances = self::setupMultiple( array("default"=>array("dsn"=>$dsn,"username"=>$username,"password"=>$password,"frozen"=>false)));
		$facadeInstance = $facadeInstances["default"];
		self::configureFacadeWithToolbox(self::$toolboxes["default"]);
		return $facadeInstance;
	}
	/**
	 * Configures RedBean to work with multiple database and multiple instances of the facade.
	 * This method accepts an array with format:
	 * array( $key =>array('dsn'=>$dsn,'username'=>$username,'password'=>$password,'frozen'=>$trueFalse) )
	 *
	 * @static
	 * @param  array $databases  array with database connection information
	 * @return array $rinstances array with R-instances
	 */
	public static function setupMultiple( $databases ) {
		$objects = array();
		foreach($databases as $key=>$database) {
			self::$toolboxes[$key] = RedBean_Setup::kickstart($database["dsn"],$database["username"],$database["password"],$database["frozen"]);
			$objects[$key] = new RedBean_FacadeHelper($key);
		}
		return $objects;
	}
	/**
	 * Adds a database to the facade, afterwards you can select the database using
	 * selectDatabase($key).
	 *
	 * @static
	 * @param string      $key    ID for the database
	 * @param string      $dsn    DSN for the database
	 * @param string      $user   User for connection
	 * @param null|string $pass   Password for connection
	 * @param bool        $frozen Whether this database is frozen or not
	 *
	 * @return void
	 */
	public static function addDatabase( $key, $dsn, $user, $pass=null, $frozen=false ) {
		self::$f = new RedBean_SQLHelper();
		self::$toolboxes[$key] = RedBean_Setup::kickstart($dsn,$user,$pass,$frozen);
	}
	/**
	 * Selects a different database for the Facade to work with.
	 *
	 * @static
	 * @param  string $key Key of the database to select
	 * @return int 1
	 */
	public static function selectDatabase($key) {
		if (self::$currentDB===$key) return false;
		self::configureFacadeWithToolbox(self::$toolboxes[$key]);
		self::$currentDB = $key;
		return true;
	}
	/**
	 * Toggles DEBUG mode.
	 * In Debug mode all SQL that happens under the hood will
	 * be printed to the screen.
	 *
	 * @param boolean $tf
	 */
	public static function debug( $tf = true ) {
		self::$adapter->getDatabase()->setDebugMode( $tf );
	}
	/**
	 * Stores a RedBean OODB Bean and returns the ID.
	 *
	 * @param  RedBean_OODBBean $bean bean
	 *
	 * @return integer $id id
	 */
	public static function store( RedBean_OODBBean $bean ) {
		return self::$redbean->store( $bean );
	}
	/**
	 * Freezes RedBean. In frozen mode the schema cannot be altered.
	 * Frozen mode is recommended for production use because it is
	 * secure and fast.
	 *
	 * @param boolean $tf whether to turn it on or off.
	 *
	 * @return void
	 */
	public static function freeze( $tf = true ) {
		self::$redbean->freeze( $tf );
	}
	/**
	 * Loads the bean with the given type and id and returns it.
	 *
	 * @param string  $type type
	 * @param integer $id   id of the bean you want to load
	 *
	 * @return RedBean_OODBBean $bean
	 */
	public static function load( $type, $id ) {
		return self::$redbean->load( $type, $id );
	}
	/**
	 * Deletes the specified bean.
	 *
	 * @param RedBean_OODBBean $bean bean to be deleted
	 *
	 * @return mixed
	 */
	public static function trash( RedBean_OODBBean $bean ) {
		return self::$redbean->trash( $bean );
	}
	/**
	 * Dispenses a new RedBean OODB Bean for use with
	 * the rest of the methods.
	 *
	 * @param string $type type
	 *
	 * @return RedBean_OODBBean $bean a new bean
	 */
	public static function dispense( $type, $num = 1 ) {
		if ($num==1) {
			return self::$redbean->dispense( $type );
		}
		else {
			$beans = array();
			for($v=0; $v<$num; $v++) $beans[] = self::$redbean->dispense( $type );
			return $beans;
		}
	}
	/**
	 * Loads a bean if ID > 0 else dispenses.
	 *
	 * @param string  $type type
	 * @param integer $id   id
	 *
	 * @return RedBean_OODBBean $bean bean
	 */
	public static function loadOrDispense( $type, $id = 0 ) {
		return ($id ? RedBean_Facade::load($type,(int)$id) : RedBean_Facade::dispense($type));
	}
	/**
	 * Convience method. Tries to find beans of a certain type,
	 * if no beans are found, it dispenses a bean of that type.
	 *
	 * @param  string $type   type of bean you are looking for
	 * @param  string $sql    SQL code for finding the bean
	 * @param  array  $values parameters to bind to SQL
	 *
	 * @return array $beans Contains RedBean_OODBBean instances
	 */
	public static function findOrDispense( $type, $sql, $values ) {
		$foundBeans = self::find($type,$sql,$values);
		if (count($foundBeans)==0) return array(self::dispense($type)); else return $foundBeans;
	}
	/**
	 * Associates two Beans. This method will associate two beans with eachother.
	 * You can then get one of the beans by using the related() function and
	 * providing the other bean. You can also provide a base bean in the extra
	 * parameter. This base bean allows you to add extra information to the association
	 * record. Note that this is for advanced use only and the information will not
	 * be added to one of the beans, just to the association record.
	 * It's also possible to provide an array or JSON string as base bean. If you
	 * pass a scalar this function will interpret the base bean as having one
	 * property called 'extra' with the value of the scalar.
	 *
	 * @param RedBean_OODBBean $bean1 bean that will be part of the association
	 * @param RedBean_OODBBean $bean2 bean that will be part of the association
	 * @param mixed $extra            bean, scalar, array or JSON providing extra data.
	 *
	 * @return mixed
	 */
	public static function associate( RedBean_OODBBean $bean1, RedBean_OODBBean $bean2, $extra = null ) {
		
		if (!$extra) {
			return self::$associationManager->associate( $bean1, $bean2 );
		}
		else{
			if (!is_array($extra)) {
				$info = json_decode($extra,true);
				if (!$info) $info = array("extra"=>$extra);
			}
			else {
				$info = $extra;
			}
			$bean = RedBean_Facade::dispense("typeLess");
			$bean->import($info);
			return self::$extAssocManager->extAssociate($bean1, $bean2, $bean);
		}
	}
	/**
	 * Breaks the association between two beans.
	 * This functions breaks the association between a pair of beans. After
	 * calling this functions the beans will no longer be associated with
	 * eachother. Calling related() with either one of the beans will no longer
	 * return the other bean.
	 *
	 * @param RedBean_OODBBean $bean1 bean
	 * @param RedBean_OODBBean $bean2 bean
	 *
	 * @return mixed
	 */
	public static function unassociate( RedBean_OODBBean $bean1, RedBean_OODBBean $bean2 , $fast=false) {
		return self::$associationManager->unassociate( $bean1, $bean2, $fast );
	}
	/**
	 * Returns all the beans associated with $bean.
	 * This method will return an array containing all the beans that have
	 * been associated once with the associate() function and are still
	 * associated with the bean specified. The type parameter indicates the
	 * type of beans you are looking for. You can also pass some extra SQL and
	 * values for that SQL to filter your results after fetching the
	 * related beans.
	 *
	 * Dont try to make use of subqueries, a subquery using IN() seems to
	 * be slower than two queries!
	 *
	 *
	 * @param RedBean_OODBBean $bean the bean you have
	 * @param string           $type the type of beans you want
	 * @param string           $sql  SQL snippet for extra filtering
	 * @param array            $val  values to be inserted in SQL slots
	 *
	 * @return array $beans	beans yielded by your query.
	 */
	public static function related( RedBean_OODBBean $bean, $type, $sql=null, $values=array()) {
		$keys = self::$associationManager->related( $bean, $type );
		if (count($keys)==0) return array();
		if (!$sql) return self::batch($type, $keys);
		$idfield = self::$writer->getIDField( $type );
		$rows = self::$writer->selectRecord( $type, array($idfield=>$keys),array($sql,$values),false );
		return self::$redbean->convertToBeans($type,$rows);
	}
	/**
	 * Checks whether a pair of beans is related N-M. This function does not
	 * check whether the beans are related in N:1 way.
	 *
	 * @static
	 * @param RedBean_OODBBean $bean1 first bean
	 * @param RedBean_OODBBean $bean2 second bean
	 *
	 * @return bool $yesNo whether they are related
	 */
	public static function areRelated( RedBean_OODBBean $bean1, RedBean_OODBBean $bean2) {
		return self::$associationManager->areRelated($bean1,$bean2);
	}
	/**
	 * The opposite of related(). Returns all the beans that are not
	 * associated with the bean provided.
	 *
	 * @param RedBean_OODBBean $bean   bean provided
	 * @param string				$type   type of bean you are searching for
	 * @param string				$sql    SQL for extra filtering
	 * @param array				$values values to be inserted in SQL slots
	 *
	 * @return array $beans beans
	 */
	public static function unrelated(RedBean_OODBBean $bean, $type, $sql=null, $values=array()) {
		$idfield = self::$writer->getIDField( $type );
		$keys = self::$associationManager->related( $bean, $type );
		$rows = self::$writer->selectRecord( $type, array($idfield=>$keys), array($sql,$values), false, true );
		return self::$redbean->convertToBeans($type,$rows);
	}
	/**
	 * Returns only single associated bean. This is the default way RedBean
	 * handles N:1 relations, by just returning the 1st one ;)
	 *
	 * @param RedBean_OODBBean $bean   bean provided
	 * @param string				$type   type of bean you are searching for
	 * @param string				$sql    SQL for extra filtering
	 * @param array				$values values to be inserted in SQL slots
	 *
	 *
	 * @return RedBean_OODBBean $bean
	 */
	public static function relatedOne( RedBean_OODBBean $bean, $type, $sql='1', $values=array() ) {
		$beans = self::related($bean, $type, $sql, $values);
		if (count($beans)==0) return null;
		return reset( $beans );
	}
	/**
	 * Clears all associated beans.
	 *
	 * @param RedBean_OODBBean $bean
	 * @param string $type type
	 *
	 * @return mixed
	 */
	public static function clearRelations( RedBean_OODBBean $bean, $type, RedBean_OODBBean $bean2 = null, $extra = null ) {
		$r = self::$associationManager->clearRelations( $bean, $type );
		if ($bean2) {
			self::associate($bean, $bean2, $extra);
		}
		return $r;
	}
	/**
	 * Finds a bean using a type and a where clause (SQL).
	 * As with most Query tools in RedBean you can provide values to
	 * be inserted in the SQL statement by populating the value
	 * array parameter; you can either use the question mark notation
	 * or the slot-notation (:keyname).
	 *
	 * @param string $type   type
	 * @param string $sql    sql
	 * @param array  $values values
	 *
	 * @return array $beans  beans
	 */
	public static function find( $type, $sql=null, $values=array() ) {
		return self::$redbean->find($type,array(),array($sql,$values));
	}
	/**
	 * Finds a bean using a type and a where clause (SQL).
	 * As with most Query tools in RedBean you can provide values to
	 * be inserted in the SQL statement by populating the value
	 * array parameter; you can either use the question mark notation
	 * or the slot-notation (:keyname).
	 * The variation also exports the beans (i.e. it returns arrays).
	 *
	 * @param string $type   type
	 * @param string $sql    sql
	 * @param array  $values values
	 *
	 * @return array $arrays arrays
	 */
	public static function findAndExport($type, $sql=null, $values=array()) {
		$items = self::find( $type, $sql, $values );
		$arr = array();
		foreach($items as $key=>$item) {
			$arr[$key]=$item->export();
		}
		return $arr;
	}
	/**
	 * Finds a bean using a type and a where clause (SQL).
	 * As with most Query tools in RedBean you can provide values to
	 * be inserted in the SQL statement by populating the value
	 * array parameter; you can either use the question mark notation
	 * or the slot-notation (:keyname).
	 * This variation returns the first bean only.
	 *
	 * @param string $type	 type
	 * @param string $sql	 sql
	 * @param array  $values values
	 *
	 * @return RedBean_OODBBean $bean
	 */
	public static function findOne( $type, $sql=null, $values=array()) {
		$items = self::find($type,$sql,$values);
		return reset($items);
	}
	/**
	 * Finds a bean using a type and a where clause (SQL).
	 * As with most Query tools in RedBean you can provide values to
	 * be inserted in the SQL statement by populating the value
	 * array parameter; you can either use the question mark notation
	 * or the slot-notation (:keyname).
	 * This variation returns the last bean only.
	 *
	 * @param string $type	 type
	 * @param string $sql	 sql
	 * @param array  $values values
	 *
	 * @return RedBean_OODBBean $bean
	 */
	public static function findLast( $type, $sql=null, $values=array() ) {
		$items = self::find( $type, $sql, $values );
		return end( $items );
	}
	/**
	 * Returns an array of beans.
	 *
	 * @param string $type type
	 * @param array  $ids  ids
	 *
	 * @return array $beans
	 */
	public static function batch( $type, $ids ) {
		return self::$redbean->batch($type, $ids);
	}
	/**
	 * Convenience function to execute Queries directly.
	 * Executes SQL.
	 *
	 * @param string $sql	 sql
	 * @param array  $values values
	 *
	 * @return array $results
	 */
	public static function exec( $sql, $values=array() ) {
		if (!self::$redbean->isFrozen()) {
			try {
				$rs = RedBean_Facade::$adapter->exec( $sql, $values );
			}catch(RedBean_Exception_SQL $e) {
				if(self::$writer->sqlStateIn($e->getSQLState(),
				array(
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
				)) {
					return NULL;
				}
				else {
					throw $e;
				}
			}
			return $rs;
		}
		else {
			return RedBean_Facade::$adapter->exec( $sql, $values );
		}
	}
	/**
	 * Convenience function to execute Queries directly.
	 * Executes SQL.
	 *
	 * @param string $sql	 sql
	 * @param array  $values values
	 *
	 * @return array $results
	 */
	public static function getAll( $sql, $values=array() ) {
		if (!self::$redbean->isFrozen()) {
			try {
				$rs = RedBean_Facade::$adapter->get( $sql, $values );
			}catch(RedBean_Exception_SQL $e) {
				if(self::$writer->sqlStateIn($e->getSQLState(),
				array(
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
				)) {
					return array();
				}
				else {
					throw $e;
				}
			}
			return $rs;
		}
		else {
			return RedBean_Facade::$adapter->get( $sql, $values );
		}
	}
	/**
	 * Convenience function to execute Queries directly.
	 * Executes SQL.
	 *
	 * @param string $sql	 sql
	 * @param array  $values values
	 *
	 * @return string $result scalar
	 */
	public static function getCell( $sql, $values=array() ) {
		if (!self::$redbean->isFrozen()) {
			try {
				$rs = RedBean_Facade::$adapter->getCell( $sql, $values );
			}catch(RedBean_Exception_SQL $e) {
				if(self::$writer->sqlStateIn($e->getSQLState(),
				array(
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
				)) {
					return NULL;
				}
				else {
					throw $e;
				}
			}
			return $rs;
		}
		else {
			return RedBean_Facade::$adapter->getCell( $sql, $values );
		}
	}
	/**
	 * Convenience function to execute Queries directly.
	 * Executes SQL.
	 *
	 * @param string $sql	 sql
	 * @param array  $values values
	 *
	 * @return array $results
	 */
	public static function getRow( $sql, $values=array() ) {
		if (!self::$redbean->isFrozen()) {
			try {
				$rs = RedBean_Facade::$adapter->getRow( $sql, $values );
			}catch(RedBean_Exception_SQL $e) {
				if(self::$writer->sqlStateIn($e->getSQLState(),
				array(
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
				)) {
					return array();
				}
				else {
					throw $e;
				}
			}
			return $rs;
		}
		else {
			return RedBean_Facade::$adapter->getRow( $sql, $values );
		}
	}
	/**
	 * Convenience function to execute Queries directly.
	 * Executes SQL.
	 *
	 * @param string $sql	 sql
	 * @param array  $values values
	 *
	 * @return array $results
	 */
	public static function getCol( $sql, $values=array() ) {
		if (!self::$redbean->isFrozen()) {
			try {
				$rs = RedBean_Facade::$adapter->getCol( $sql, $values );
			}catch(RedBean_Exception_SQL $e) {
				if(self::$writer->sqlStateIn($e->getSQLState(),
				array(
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
				)) {
					return array();
				}
				else {
					throw $e;
				}
			}
			return $rs;
		}
		else {
			return RedBean_Facade::$adapter->getCol( $sql, $values );
		}
	}
	
	/**
	 * Convenience function to execute Queries directly.
	 * Executes SQL.
	 *
	 * @param string $sql	 sql
	 * @param array  $values values
	 *
	 * @return array $results
	 */
	public static function getAssoc($sql,$value) {
		if (!self::$redbean->isFrozen()) {
			try {
				$rs = RedBean_Facade::$adapter->getAssoc( $sql, $values );
			}catch(RedBean_Exception_SQL $e) {
				if(self::$writer->sqlStateIn($e->getSQLState(),
				array(
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_COLUMN,
				RedBean_QueryWriter::C_SQLSTATE_NO_SUCH_TABLE)
				)) {
					return array();
				}
				else {
					throw $e;
				}
			}
			return $rs;
		}
		else {
			return RedBean_Facade::$adapter->getCol( $sql, $values );
		}
	}	
	/**
	 * Makes a copy of a bean. This method copies the bean and
	 * adds the specified associations.
	 *
	 * For instance: R::copy( $book, "author,library" );
	 *
	 * Duplicates the $book bean and copies the association links
	 * author and library as well. Note that only many-to-many
	 * associations can be copied. Also note that no author or library
	 * beans are copied, only the connections or references to these
	 * beans.
	 *
	 * @param RedBean_OODBBean $bean							bean
	 * @param string				$associatedBeanTypesStr bean types associated
	 *
	 * @return array $copiedBean the duplicated bean
	 */
	public static function copy($bean, $associatedBeanTypesStr="") {
		$type = $bean->getMeta("type");
		$copy = RedBean_Facade::dispense($type);
		$copy->import( $bean->export() );
		$copy->copyMetaFrom( $bean );
		$copy->id = 0;
		RedBean_Facade::store($copy);
		$associatedBeanTypes = explode(",",$associatedBeanTypesStr);
		foreach($associatedBeanTypes as $associatedBeanType) {
			$assocBeans = RedBean_Facade::related($bean, $associatedBeanType);
			foreach($assocBeans as $assocBean) {
				RedBean_Facade::associate($copy,$assocBean);
			}
		}
		$copy->setMeta("original",$bean);
		return $copy;
	}
	/**
	 * Given an array of two beans and a property, this method
	 * swaps the value of the property.
	 * This is handy if you need to swap the priority or orderNo
	 * of an item (i.e. bug-tracking, page order).
	 *
	 * @param array  $beans    beans
	 * @param string $property property
	 */
	public static function swap( $beans, $property ) {
		$bean1 = array_shift($beans);
		$bean2 = array_shift($beans);
		$tmp = $bean1->$property;
		$bean1->$property = $bean2->$property;
		$bean2->$property = $tmp;
		RedBean_Facade::store($bean1);
		RedBean_Facade::store($bean2);
	}
	/**
	 * Converts a series of rows to beans.
	 *
	 * @param string $type type
	 * @param array  $rows must contain an array of arrays.
	 *
	 * @return array $beans
	 */
	public static function convertToBeans($type,$rows) {
		return self::$redbean->convertToBeans($type,$rows);
	}
	/**
	 * This static property can be set to force the system to return
	 * comma separated lists as in legacy versions.
	 *
	 * @var boolean
	 */
	public static $flagUseLegacyTaggingAPI = false;
	/**
	 * Tests whether a bean has been associated with one ore more
	 * of the listed tags. If the third parameter is TRUE this method
	 * will return TRUE only if all tags that have been specified are indeed
	 * associated with the given bean, otherwise FALSE.
	 * If the third parameter is FALSE this
	 * method will return TRUE if one of the tags matches, FALSE if none
	 * match.
	 *
	 * @static
	 * @param  RedBean_OODBBean $bean bean to check for tags
	 * @param  array            $tags list of tags
	 * @param  boolean          $all  whether they must all match or just some
	 *
	 * @return boolean $didMatch Whether the bean has been assoc. with the tags
	 */
	public static function hasTag($bean, $tags, $all=false) {
		$foundtags = RedBean_Facade::tag($bean);
		if (is_string($foundtags)) $foundtags = explode(",",$tags);
		$same = array_intersect($tags,$foundtags);
		if ($all) {
			return (implode(",",$same)===implode(",",$tags));
		}
		return (bool) (count($same)>0);
	}
	/**
	 * Removes all sepcified tags from the bean. The tags specified in
	 * the second parameter will no longer be associated with the bean.
	 *
	 * @static
	 * @param  RedBean_OODBBean $bean    tagged bean
	 * @param  array            $tagList list of tags (names)
	 *
	 * @return void
	 */
	public static function untag($bean,$tagList) {
		if ($tagList!==false && !is_array($tagList)) $tags = explode( ",", (string)$tagList); else $tags=$tagList;
		foreach($tags as $tag) {
			$t = RedBean_Facade::findOne("tag"," title = ? ",array($tag));
			if ($t) {
				RedBean_Facade::unassociate( $bean, $t );
			}
		}
	}
	/**
	 * Tags a bean or returns tags associated with a bean.
	 * If $tagList is null or omitted this method will return a
	 * comma separated list of tags associated with the bean provided.
	 * If $tagList is a comma separated list (string) of tags all tags will
	 * be associated with the bean.
	 * You may also pass an array instead of a string.
	 *
	 * @param RedBean_OODBBean $bean    bean
	 * @param mixed				$tagList tags
	 *
	 * @return string $commaSepListTags
	 */
	public static function tag( RedBean_OODBBean $bean, $tagList = null ) {
		if (is_null($tagList)) {
			$tags = RedBean_Facade::related( $bean, "tag");
			$foundTags = array();
			foreach($tags as $tag) {
				$foundTags[] = $tag->title;
			}
			if (self::$flagUseLegacyTaggingAPI) return implode(",",$foundTags);
			return $foundTags;
		}
		RedBean_Facade::clearRelations( $bean, "tag" );
		RedBean_Facade::addTags( $bean, $tagList );
	}
	/**
	 * Adds tags to a bean.
	 * If $tagList is a comma separated list (string) of tags all tags will
	 * be associated with the bean.
	 * You may also pass an array instead of a string.
	 *
	 * @param RedBean_OODBBean $bean    bean
	 * @param mixed				$tagList tags
	 *
	 * @return void
	 */
	public static function addTags( RedBean_OODBBean $bean, $tagList ) {
		if ($tagList!==false && !is_array($tagList)) $tags = explode( ",", (string)$tagList); else $tags=$tagList;
		if ($tagList===false) return;
		foreach($tags as $tag) {
			$t = RedBean_Facade::findOne("tag"," title = ? ",array($tag));
			if (!$t) {
				$t = RedBean_Facade::dispense("tag");
				$t->title = $tag;
				RedBean_Facade::store($t);
			}
			RedBean_Facade::associate( $bean, $t );
		}
	}
	/**
	 * @static
	 * Returns all beans that have been tagged with one of the tags given.
	 *
	 * @param  $beanType
	 * @param  $tagList
	 *
	 * @return array
	 */
	public static function tagged( $beanType, $tagList ) {
		if ($tagList!==false && !is_array($tagList)) $tags = explode( ",", (string)$tagList); else $tags=$tagList;
		$collection = array();
		foreach($tags as $tag) {
			$retrieved = array();
			$tag = RedBean_Facade::findOne("tag"," title = ? ", array($tag));
			if ($tag) $retrieved = RedBean_Facade::related($tag, $beanType);
			foreach($retrieved as $key=>$bean) $collection[$key]=$bean;
		}
		return $collection;
	}
	/**
	 * Wipes all beans of type $beanType.
	 *
	 * @param string $beanType type of bean you want to destroy entirely.
	 */
	public static function wipe( $beanType ) {
		RedBean_Facade::$redbean->wipe($beanType);
	}
	/**
	 * Counts beans
	 *
	 * @param string $beanType type of bean
	 *
	 * @return integer $numOfBeans
	 */
	public static function count( $beanType ) {
		return RedBean_Facade::$redbean->count($beanType);
	}
	/**
	 * Configures the facade, want to have a new Writer? A new Object Database or a new
	 * Adapter and you want it on-the-fly? Use this method to hot-swap your facade with a new
	 * toolbox.
	 *
	 * @static
	 * @param RedBean_ToolBox $tb toolbox
	 *
	 * @return RedBean_ToolBox $tb old, rusty, previously used toolbox
	 */
	public static function configureFacadeWithToolbox( RedBean_ToolBox $tb ) {
		$oldTools = self::$toolbox;
		self::$toolbox = $tb;
		self::$writer = self::$toolbox->getWriter();
		self::$adapter = self::$toolbox->getDatabaseAdapter();
		self::$redbean = self::$toolbox->getRedBean();
		self::$associationManager = new RedBean_AssociationManager( self::$toolbox );
		self::$redbean->setAssociationManager(self::$associationManager);
		self::$extAssocManager = new RedBean_ExtAssociationManager( self::$toolbox );
		$helper = new RedBean_ModelHelper();
		self::$redbean->addEventListener("update", $helper );
		self::$redbean->addEventListener("open", $helper );
		self::$redbean->addEventListener("delete", $helper );
		self::$associationManager->addEventListener("delete", $helper );
		self::$redbean->addEventListener("after_delete", $helper );
		self::$redbean->addEventListener("after_update", $helper );
		self::$redbean->addEventListener("dispense", $helper );
		return $oldTools;
	}
	/**
	 * facade method for Cooker.
	 *
	 * @static
	 * @param  $arr
	 * @return array
	 */
	public static function cooker($arr) {
		return RedBean_Cooker::load($arr, RedBean_Facade::$toolbox);
	}
	/**
	 * Creates a view called $viewID by joining types specified in $types.
	 * This function only works in fluid mode, in frozen mode it immediately
	 * returns boolean false.
	 *
	 * @static
	 * @throws RedBean_Exception_Security
	 *
	 * @param  string $viewID  name of the view you want to create
	 * @param  string $types   comma separated list of types
	 *
	 * @return bool	  $success whether the view has been created or not
	 */
	public static function view($viewID, $types) {
		if (self::$redbean->isFrozen()) return false;
		$types = explode(",",$types);
		if (count($types)<2) throw new RedBean_Exception_Security("Creating useless view for just one type? Provide at least two types!");
		$refType = array_shift($types);
		$viewManager = new RedBean_ViewManager( self::$toolbox );
		return $viewManager->createView($viewID,$refType,$types);
	}
	/**
	 * Mass Bean Export function.
	 * Exports all beans specified in the first argument.
	 *
	 * @static
	 * @param  array $beans collection of beans to be exported
	 *
	 * @return array Array containing sub-arrays representing beans
	 */
	public static function exportAll($beans,$recursively=false) {
		if ($recursively) {
			if (!self::$exporter) {
				self::$exporter = new RedBean_Plugin_BeanExport(self::$toolbox);
				self::$exporter->loadSchema();
			}
			return self::$exporter->export($beans);
		}
		else {
			$array = array();
			foreach($beans as $bean) {
				if ($bean instanceof RedBean_OODBBean) {
					$array[] = $bean->export();
				}
			}
			return $array;
		}
	}
	/**
	 * Mass export beans to object instances of a certain class.
	 *
	 * @param array  $beans collection of beans to be exported
	 * @param string $class name of the class to be used
	 *
	 * @return array $instances collection of instances of $class filled with beans
	 */
	public static function exportAllToObj($beans, $classname='stdClass') {
		$array = array();
		foreach($beans as $bean) {
			if ($bean instanceof RedBean_OODBBean) {
				$inst = new $classname;
				$bean->exportToObj($inst);
				$array[] = $inst;
			}
		}
		return $array;
	}
	/**
	 * Facade Convience method for adapter transaction system.
	 * Begins a transaction.
	 *
	 * @static
	 * @return void
	 */
	public static function begin() {
		self::$adapter->startTransaction();
	}
	/**
	 * Facade Convience method for adapter transaction system.
	 * Commits a transaction.
	 *
	 * @static
	 * @return void
	 */
	public static function commit() {
		self::$adapter->commit();
	}
	/**
	 * Facade Convience method for adapter transaction system.
	 * Rolls back a transaction.
	 *
	 * @static
	 * @return void
	 */
	public static function rollback() {
		self::$adapter->rollback();
	}
	/**
	 * Returns a list of columns. Format of this array:
	 * array( fieldname => type )
	 * Note that this method only works in fluid mode because it might be
	 * quite heavy on production servers!
	 *
	 * @static
	 * @param  string $table   name of the table (not type) you want to get columns of
	 *
	 * @return array  $columns list of columns and their types
	 */
	public static function getColumns($table) {
		return self::$writer->getColumns($table);
	}
	/**
	 * Returns a SQL formatted date string (i.e. 1980-01-01 10:00:00)
	 *
	 * @static
	 * @return string $SQLTimeString SQL Formatted time string
	 */
	public static function now() {
		return date('Y-m-d H:i:s');
	}
	/**
	 * Generates question mark slots for an array of values.
	 *
	 * @param array $array
	 * @return string $slots
	 */
	public static function genSlots($array) {
		if (count($array)>0) {
			$filler = array_fill(0,count($array),'?');
			return implode(',',$filler);
		}
		else {
			return '';
		}
	}
	/**
	 * Installs the default bean formatter with a prefix.
	 *
	 * @param string $prefix prefix
	 */
	public static function prefix($prefix) {
		$beanFormatter = new RedBean_DefaultBeanFormatter;
		$beanFormatter->setPrefix($prefix);
		self::$writer->setBeanFormatter($beanFormatter);
	}
	/**
	 * Nukes the entire database.
	 */
	public static function nuke() {
		if (!self::$redbean->isFrozen()) {
			self::$writer->wipeAll();
		}
	}
	
	
}

if (function_exists('lcfirst')===false){
	function lcfirst( $str ){
		return (string)(strtolower(substr($str,0,1)).substr($str,1));
    }
}

/**
 * RedBean Facade Helper
 * A little helper bundles with the facade to allow you to have
 * multiple instances of a facade.
 *
 * @throws Exception
 *
 */
class RedBean_FacadeHelper {
	/**
	 * Contains the Key ID for the database this instance is connected to.
	 * You cannot change this.
	 *
	 * @var string
	 */
	private $key;
	/**
	 * Constructor for R-facade instance, requires a Database Key ID.
	 *
	 * @param  $key
	 */
	public function __construct($key) {
		$this->key = $key;
	}
	/**
	 * Call router. This function routes your call to the R-facade.
	 * Note that this method is actually quite expensive in terms of CPU because it uses
	 * a call_user_func, as time passes I will port methods from the static facade to this
	 * helper to speed things up.
	 *
	 * @param  string $func function to call
	 * @param  array  $args arguments to use when calling function
	 *
	 * @return mixed $whateverTheFunctionReturns
	 */
	public function __call($func,$args) {
		Redbean_Facade::selectDatabase($this->key);
		$func = "RedBean_Facade::$func";
		return call_user_func_array($func,$args);
	}
}
/**
 * BeanCan
 * A Server Interface for RedBean and Fuse.
 *
 * The BeanCan Server is a lightweight, minimalistic server interface for
 * RedBean that can perfectly act as an ORM middleware solution or a backend
 * for an AJAX application.
 *
 * By Gabor de Mooij
 *
 */
class RedBean_BeanCan {
	/**
	 * Holds a FUSE instance.
	 * @var RedBean_ModelHelper
	 */
	private $modelHelper;
	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->modelHelper = new RedBean_ModelHelper;
	}
	/**
	 * Writes a response object for the client (JSON encoded).
	 *
	 * @param mixed   $result       result
	 * @param integer $id           request ID
	 * @param integer $errorCode    error code from server
	 * @param string  $errorMessage error message from server
	 *
	 * @return string $json JSON encoded response.
	 */
	private function resp($result=null, $id=null, $errorCode="-32603",$errorMessage="Internal Error") {
		$response = array(
			"jsonrpc"=>"2.0",
		);
		if ($id) {
			$response["id"] = $id;
		}
		if ($result) {
			$response["result"]=$result;
		}
		else {
			$response["error"] = array(
				"code"=>$errorCode,
				"message"=>$errorMessage
			);
		}
		return (json_encode($response));
	}
	/**
	 * Processes a JSON object request.
	 *
	 * @param array $jsonObject JSON request object
	 *
	 * @return mixed $result result
	 */
	public function handleJSONRequest( $jsonString ) {
		
		$jsonArray = json_decode($jsonString,true);
		if (!$jsonArray) return $this->resp(null,null,-32700,"Cannot Parse JSON");
		if (!isset($jsonArray["jsonrpc"])) return $this->resp(null,null,-32600,"No RPC version");
		if (($jsonArray["jsonrpc"]!="2.0")) return $this->resp(null,null,-32600,"Incompatible RPC Version");
		
		if (!isset($jsonArray["id"])) return $this->resp(null,null,-32600,"No ID");
		
		$id = $jsonArray["id"];
		
		if (!isset($jsonArray["method"])) return $this->resp(null,$id,-32600,"No method");
		
		if (!isset($jsonArray["params"])) {
			$data = array();
		}
		else {
			$data = $jsonArray["params"];
		}
		
		$method = explode(":",trim($jsonArray["method"]));
		if (count($method)!=2) {
			return $this->resp(null, $id, -32600,"Invalid method signature. Use: BEAN:ACTION");
		}
		
		$beanType = $method[0];
		$action = $method[1];
		
		if (preg_match("/\W/",$beanType)) return $this->resp(null, $id, -32600,"Invalid Bean Type String");
		if (preg_match("/\W/",$action)) return $this->resp(null, $id, -32600,"Invalid Action String");
		try {
			switch($action) {
				case "store":
					if (!isset($data[0])) return $this->resp(null, $id, -32602,"First param needs to be Bean Object");
					$data = $data[0];
					if (!isset($data["id"])) $bean = RedBean_Facade::dispense($beanType); else
						$bean = RedBean_Facade::load($beanType,$data["id"]);
					$bean->import( $data );
					$rid = RedBean_Facade::store($bean);
					return $this->resp($rid, $id);
					break;
				case "load":
					if (!isset($data[0])) return $this->resp(null, $id, -32602,"First param needs to be Bean ID");
					$bean = RedBean_Facade::load($beanType,$data[0]);
					return $this->resp($bean->export(),$id);
					break;
				case "trash":
					if (!isset($data[0])) return $this->resp(null, $id, -32602,"First param needs to be Bean ID");
					$bean = RedBean_Facade::load($beanType,$data[0]);
					RedBean_Facade::trash($bean);
					return $this->resp("OK",$id);
					break;
				default:
					$modelName = $this->modelHelper->getModelName( $beanType );
					if (!class_exists($modelName)) return $this->resp(null, $id, -32601,"No such bean in the can!");
					$beanModel = new $modelName;
					if (!method_exists($beanModel,$action)) return $this->resp(null, $id, -32601,"Method not found in Bean: $beanType ");
					return $this->resp( call_user_func_array(array($beanModel,$action), $data), $id);
			}
		}
		catch(Exception $exception) {
			return $this->resp(null, $id, -32099,$exception->getCode()."-".$exception->getMessage());
		}
	}
	
	/**
	 * Support for RESTFul GET-requests
	 * 
	 * @param string $pathToResource RESTFul path to resource
	 * 
	 * @return array $resultArray
	 */
	public function handleRESTGetRequest( $pathToResource ) {
		$resourceInfo = explode('/',$pathToResource);
		if (count($resourceInfo) < 1) return $this->resp('no beans found',0);
		$type = $resourceInfo[0];
		if (count($resourceInfo) < 2) {
			return $this->resp(RedBean_Facade::findAndExport($type));
		}
		else {
			$id = (int) $resourceInfo[1];
			return $this->resp(RedBean_Facade::load($type,$id)->export(),$id);
		}
	}
}

 /**
 * @name RedBean Cooker
 * @file RedBean
 * @author Gabor de Mooij and the RedBean Team
 * @copyright Gabor de Mooij (c)
 * @license BSD
 *
 * The Cooker is a little candy to make it easier to read-in an HTML form.
 * This class turns a form into a collection of beans plus an array
 * describing the desired associations.
 *
 * (c) G.J.G.T. (Gabor) de Mooij
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_Cooker {
	public static $dontSetEmptyValues = false;
	/**
	 * This method will inspect the array provided and load/dispense the
	 * desired beans. To dispense a new bean, the array must contain:
	 *
	 * array( "newuser"=> array("type"=>"user","name"=>"John") )
	 *
	 * - Creates a new bean of type user, property name is set to "John"
	 *
	 * To load a bean (for association):
	 *
	 * array( "theaddress"=> array("type"=>"address","id"=>2) )
	 *
	 * - Loads a bean of type address with ID 2
	 *
	 * Now to associate this bean in your form:
	 *
	 * array("associations"=>array( "0" => array( "newuser-theaddress" ) ))
	 *
	 * - Associates the beans under keys newuser and theaddress.
	 *
	 * To modify an existing bean:
	 *
	 * array("existinguser"=>array("type"=>"user","id"=>2,"name"=>"Peter"))
	 *
	 * - Changes name of bean of type user with ID 2 to 'Peter'
	 *
	 * This function returns:
	 *
	 * array(
	 * 	"can" => an array with beans, either loaded or dispensed and populated
	 *  "pairs" => an array with pairs of beans to be associated
	 *  "sorted" => sorted by type
	 * );
	 *
	 * Note that this function actually does not store or associate anything at all,
	 * it just prepares two arrays.
	 *
	 * @static
	 * @param  $post the POST array containing the form data
	 * @return array hash table containing 'can' and 'pairs'
	 *
	 */
	public static function load($post, RedBean_ToolBox $toolbox) {
		$writer = $toolbox->getWriter();
		
		if (isset($post["associations"])) {
			$associations = $post["associations"];
			unset($post["associations"]);
		}
		
		$can = $pairs = $sorted = array();
		foreach($post as $key => $rawBean) {
			if (is_array($rawBean) && isset($rawBean["type"])) {
				
				$type = $rawBean["type"];
				unset($rawBean["type"]);
				
				$idfield = $writer->getIDField($type);
				if (isset($rawBean[$idfield])) {
					
					$id = $rawBean[$idfield];
					
					if ($id==0 && count($rawBean)===1) continue;
					unset($rawBean[$idfield]);
					
					$bean = RedBean_Facade::load($type, $id);
				}
				else { 
					$bean = RedBean_Facade::dispense($type);
				}
				
				foreach($rawBean as $field=>$value){
					if (!empty($value))
						$bean->$field = $value;
					elseif (!self::$dontSetEmptyValues)
						$bean->$field = $value;
				}
				$can[$key]=$bean;
				if (!isset($sorted[$type]))  $sorted[$type]=array();
				$sorted[$type][]=$bean;
			}
		}
		if (isset($associations) && is_array($associations)) {
			foreach($associations as $assoc) {
				foreach($assoc as $info) {
					if ($info=="0" || $info=="") continue;
					$keys = explode("-", $info);
					
					if (isset($can[$keys[0]])) $bean1 = $can[$keys[0]]; else {
						$loader = explode(":",$keys[0]);
						$bean1 = RedBean_Facade::load( $loader[0], $loader[1] );
					}
					$bean2 = $can[$keys[1]];
					$pairs[] = array( $bean1, $bean2 );
				}
			}
		}
		return array(
			"can"=>$can, 
			"pairs"=>$pairs, 
			"sorted"=>$sorted 
		);
	}
	/**
	 * Sets the toolbox to be used by graph()
	 *
	 * @param RedBean_Toolbox $toolbox toolbox
	 * @return void
	 */
	public function setToolbox(RedBean_Toolbox $toolbox) {
		$this->toolbox = $toolbox;
		$this->redbean = $this->toolbox->getRedbean();
	}
	/**
	 * Turns a request array into a collection of beans
	 *
	 * @param  $array array
	 *
	 * @return array $beans beans
	 */
	public function graph( $array ) {
		$beans = array();
		if (is_array($array) && isset($array["type"])) {
			$type = $array["type"];
			unset($array["type"]);
			
			if (isset($array["id"])) {
				$id = (int) $array["id"];
				$bean = $this->redbean->load($type,$id);
			}
			else {
				$bean = $this->redbean->dispense($type);
			}
			foreach($array as $property=>$value) {
				if (is_array($value)) {
					$bean->$property = $this->graph($value);
				}
				else {
					$bean->$property = $value;
				}
			}
			return $bean;
		}
		elseif (is_array($array)) {
			foreach($array as $key=>$value) {
				$beans[$key] = $this->graph($value);
			}
			return $beans;
		}
		else {
			return $array;
		}
		return $beans;
	}
}


class R extends RedBean_Facade{
}
