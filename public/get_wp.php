<?php

	$id = $_POST['id'];

	$arr = array("A purely peer-to-peer version of electronic cash would allow online
payments to be sent directly from one party to another without going through a
financial institution. Digital signatures provide part of the solution, but the main
benefits are lost if a trusted third party is still required to prevent double-spending.
We propose a solution to the double-spending problem using a peer-to-peer network.
The network timestamps transactions by hashing them into an ongoing chain of
hash-based proof-of-work, forming a record that cannot be changed without redoing
the proof-of-work. The longest chain not only serves as proof of the sequence of
events witnessed, but proof that it came from the largest pool of CPU power. As
long as a majority of CPU power is controlled by nodes that are not cooperating to
attack the network, they'll generate the longest chain and outpace attackers. The
network itself requires minimal structure. Messages are broadcast on a best effort
basis, and nodes can leave and rejoin the network at will, accepting the longest
proof-of-work chain as proof of what happened while they were gone.Commerce on the Internet has come to rely almost exclusively on financial institutions serving as
trusted third parties to process electronic payments. While the system works well enough for
most transactions, it still suffers from the inherent weaknesses of the trust based model.
Completely non-reversible transactions are not really possible, since financial institutions cannot
avoid mediating disputes. The cost of mediation increases transaction costs, limiting the
minimum practical transaction size and cutting off the possibility for small casual transactions,
and there is a broader cost in the loss of ability to make non-reversible payments for nonreversible
services. With the possibility of reversal, the need for trust spreads. Merchants must
be wary of their customers, hassling them for more information than they would otherwise need.
A certain percentage of fraud is accepted as unavoidable. These costs and payment uncertainties
can be avoided in person by using physical currency, but no mechanism exists to make payments
over a communications channel without a trusted party.
What is needed is an electronic payment system based on cryptographic proof instead of trust,
allowing any two willing parties to transact directly with each other without the need for a trusted
third party. Transactions that are computationally impractical to reverse would protect sellers
from fraud, and routine escrow mechanisms could easily be implemented to protect buyers. In
this paper, we propose a solution to the double-spending problem using a peer-to-peer distributed
timestamp server to generate computational proof of the chronological order of transactions. The
system is secure as long as honest nodes collectively control more CPU power than any
cooperating group of attacker nodes.",

"The blockchain paradigm when coupled with cryptographically-secured transactions has demonstrated its
utility through a number of projects, not least Bitcoin. Each such project can be seen as a simple application on
a decentralised, but singleton, compute resource. We can call this paradigm a transactional singleton machine with
shared-state.
Ethereum implements this paradigm in a generalised manner. Furthermore it provides a plurality of such resources,
each with a distinct state and operating code but able to interact through a message-passing framework with others.
We discuss its design, implementation issues, the opportunities it provides and the future hurdles we envisage. With ubiquitous internet connections in most places
of the world, global information transmission has become
incredibly cheap. Technology-rooted movements like Bitcoin
have demonstrated, through the power of the default,
consensus mechanisms and voluntary respect of the social
contract that it is possible to use the internet to make
a decentralised value-transfer system, shared across the
world and virtually free to use. This system can be said
to be a very specialised version of a cryptographically secure,
transaction-based state machine. Follow-up systems
such as Namecoin adapted this original “currency application”
of the technology into other applications albeit
rather simplistic ones.
Ethereum is a project which attempts to build the generalised
technology; technology on which all transactionbased
state machine concepts may be built. Moreover it
aims to provide to the end-developer a tightly integrated
end-to-end system for building software on a hitherto unexplored
compute paradigm in the mainstream: a trustful
object messaging compute framework.",

"While several consensus algorithms exist for the Byzantine Generals Problem, specifically as it
pertains to distributed payment systems, many suffer from high latency induced by the requirement
that all nodes within the network communicate synchronously. In this work, we present a novel
consensus algorithm that circumvents this requirement by utilizing collectively-trusted subnetworks
within the larger network. We show that the “trust” required of these subnetworks is in fact minimal
and can be further reduced with principled choice of the member nodes. In addition, we show that
minimal connectivity is required to maintain agreement throughout the whole network. The result is a
low-latency consensus algorithm which still maintains robustness in the face of Byzantine failures. We
present this algorithm in its embodiment in the Ripple Protocol. Interest and research in distributed consensus systems
has increased markedly in recent years, with a central
focus being on distributed payment networks. Such networks
allow for fast, low-cost transactions which are not
controlled by a centralized source. While the economic
benefits and drawbacks of such a system are worthy of
much research in and of themselves, this work focuses
on some of the technical challenges that all distributed
payment systems must face. While these problems are
varied, we group them into three main categories: correctness,
agreement, and utility.
By correctness, we mean that it is necessary for a
distributed system to be able to discern the difference between
a correct and fraudulent transaction. In traditional
fiduciary settings, this is done through trust between
institutions and cryptographic signatures that guarantee
a transaction is indeed coming from the institution that
it claims to be coming from. In distributed systems,
however, there is no such trust, as the identity of any
and all members in the network may not even be known.
Therefore, alternative methods for correctness must be
1
utilized.
Agreement refers to the problem of maintaining a
single global truth in the face of a decentralized accounting
system. While similar to the correctness problem,
the difference lies in the fact that while a malicious
user of the network may be unable to create a fraudulent
transaction (defying correctness), it may be able to
create multiple correct transactions that are somehow
unaware of each other, and thus combine to create a
fraudulent act. For example, a malicious user may make
two simultaneous purchases, with only enough funds in
their account to cover each purchase individually, but
not both together. Thus each transaction by itself is
correct, but if executed simultaneously in such a way
that the distributed network as a whole is unaware of
both, a clear problem arises, commonly referred to as
the “Double-Spend Problem” [1]. Thus the agreement
problem can be summarized as the requirement that only
one set of globally recognized transactions exist in the
network.
Utility is a slightly more abstract problem, which we
define generally as the “usefulness” of a distributed payment
system, but which in practice most often simplifies
to the latency of the system. A distributed system that
is both correct and in agreement but which requires one
year to process a transaction, for example, is obviously
an inviable payment system. Additional aspects of utility
may include the level of computing power required
to participate in the correctness and agreement processes
or the technical proficiency required of an end user to
avoid being defrauded in the network.
Many of these issues have been explored long before
the advent of modern distributed computer systems, via
a problem known as the “Byzantine Generals Problem”
[2]. In this problem, a group of generals each control
a portion of an army and must coordinate an attack by
sending messengers to each other. Because the generals
are in unfamiliar and hostile territory, messengers
may fail to reach their destination (just as nodes in a
distributed network may fail, or send corrupted data instead
of the intended message). An additional aspect
of the problem is that some of the generals may be
traitors, either individually, or conspiring together, and
so messages may arrive which are intended to create a
false plan that is doomed to failure for the loyal generals
(just as malicious members of a distributed system
may attempt to convince the system to accept fraudulent
transactions, or multiple versions of the same truthful
transaction that would result in a double-spend). Thus
a distributed payment system must be robust both in
the face of standard failures, and so-called “Byzantine”
failures, which may be coordinated and originate from
multiple sources in the network.
In this work, we analyze one particular implementation
of a distributed payment system: the Ripple Protocol.
We focus on the algorithms utilized to achieve
the above goals of correctness, agreement, and utility,
and show that all are met (within necessary and predetermined
tolerance thresholds, which are well-understood).
In addition, we provide code that simulates the consensus
process with parameterizable network size, number
of malicious users, and message-sending latencies.",

"A purely peer-to-peer version of electronic cash would allow online
payments to be sent directly from one party to another without going through a
financial institution. Digital signatures provide part of the solution, but the main
benefits are lost if a trusted third party is still required to prevent double-spending.
We propose a solution to the double-spending problem using a peer-to-peer network.
The network timestamps transactions by hashing them into an ongoing chain of
hash-based proof-of-work, forming a record that cannot be changed without redoing
the proof-of-work. The longest chain not only serves as proof of the sequence of
events witnessed, but proof that it came from the largest pool of CPU power. As
long as a majority of CPU power is controlled by nodes that are not cooperating to
attack the network, they'll generate the longest chain and outpace attackers. The
network itself requires minimal structure. Messages are broadcast on a best effort
basis, and nodes can leave and rejoin the network at will, accepting the longest
proof-of-work chain as proof of what happened while they were gone.Commerce on the Internet has come to rely almost exclusively on financial institutions serving as
trusted third parties to process electronic payments. While the system works well enough for
most transactions, it still suffers from the inherent weaknesses of the trust based model.
Completely non-reversible transactions are not really possible, since financial institutions cannot
avoid mediating disputes. The cost of mediation increases transaction costs, limiting the
minimum practical transaction size and cutting off the possibility for small casual transactions,
and there is a broader cost in the loss of ability to make non-reversible payments for nonreversible
services. With the possibility of reversal, the need for trust spreads. Merchants must
be wary of their customers, hassling them for more information than they would otherwise need.
A certain percentage of fraud is accepted as unavoidable. These costs and payment uncertainties
can be avoided in person by using physical currency, but no mechanism exists to make payments
over a communications channel without a trusted party.
What is needed is an electronic payment system based on cryptographic proof instead of trust,
allowing any two willing parties to transact directly with each other without the need for a trusted
third party. Transactions that are computationally impractical to reverse would protect sellers
from fraud, and routine escrow mechanisms could easily be implemented to protect buyers. In
this paper, we propose a solution to the double-spending problem using a peer-to-peer distributed
timestamp server to generate computational proof of the chronological order of transactions. The
system is secure as long as honest nodes collectively control more CPU power than any
cooperating group of attacker nodes.",

"Cardano is a project that began in 2015 as an effort to change the way cryptocurrencies are
designed and developed. The overall focus beyond a particular set of innovations is to provide a
more balanced and sustainable ecosystem that better accounts for the needs of its users as
well as other systems seeking integration.
In the spirit of many open source projects, Cardano did not begin with a comprehensive
roadmap or even an authoritative white paper. Rather it embraced a collection of design
principles, engineering best practices and avenues for exploration. These include the following:
? Separation of accounting and computation into different layers
? Implementation of core components in highly modular functional code
? Small groups of academics and developers competing with peer reviewed research
? Heavy use of interdisciplinary teams including early use of InfoSec experts
? Fast iteration between white papers, implementation and new research required to
correct issues discovered during review
? Building in the ability to upgrade post-deployed systems without destroying the network
? Development of a decentralized funding mechanism for future work
? A long-term view on improving the design of cryptocurrencies so they can work on
mobile devices with a reasonable and secure user experience
? Bringing stakeholders closer to the operations and maintenance of their cryptocurrency
? Acknowledging the need to account for multiple assets in the same ledger
? Abstracting transactions to include optional metadata in order to better conform to the
needs of legacy systems
? Learning from the nearly 1,000 altcoins by embracing features that make sense
? Adopt a standards-driven process inspired by the Internet Engineering Task Force using
a dedicated foundation to lock down the final protocol design
? Explore the social elements of commerce
? Find a healthy middle ground for regulators to interact with commerce without
compromising some core principles inherited from Bitcoin
From this unstructured set of ideas, the principals working on Cardano began both to explore
cryptocurrency literature and to build a toolset of abstractions. The output of this research is
IOHK’s extensive library of papers, numerous survey results such as this recent scripting
language overview as well as an Ontology of Smart Contracts , and the Scorex project . Lessons
yielded an appreciation for the cryptocurrency industry’s unusual and at times
counterproductive growth.
First, unlike successful protocols such as TCP/IP, there is little layering in the design of
cryptocurrencies. There has been a desire to preserve a single notion of consensus around
facts and events recorded in a single ledger, regardless of whether it makes sense.
For example, Ethereum has encumbered enormous complexity attempting to become a
universal world computer, but suffers from trivial concerns potentially destroying the system’s
ability to operate as a store of value. Should everyone’s program be a first class citizen
regardless of its economic value, cost to maintain, or regulatory consequences?
Second, there is little appreciation for prior results in mainstream cryptographic research. For
example, Bitshares’ delegated Proof of Stake could have easily and reliably generated random
numbers using coin tossing with guaranteed output delivery, which is a technique known since
the 1980s (see the seminal paper by Rabin and Ben-Or ).
Third, most altcoins (with a few notable exceptions such as Tezos ) have not made any
accommodation for future updates. The ability to successfully push a soft or hard fork is pivotal
to the long-term success of any cryptocurrency.
As a corollary, enterprise users cannot commit millions of dollars worth of resources to
protocols where the roadmap and actors behind them are ephemeral, petty or radicalized. There needs to be an efficient process through which social consensus can form around a vision for
evolving the underlying protocol. If this process is enormously burdensome, fragmentation
could break the community apart.
Finally, money is ultimately a social phenomenon. In the effort to anonymize and
disintermediate central actors, Bitcoin and its contemporaries have also discarded the need for
stable identities, metadata and reputation in commercial transactions. Adding these data
through centralized solutions removes the auditability, global availability and immutability —
which is the entire point of using a blockchain.
Legacy financial systems such as those composed of SWIFT, FIX and ACH are rich in
transactional metadata. It is not enough to know how much value moved between accounts,
regulation often requires the attribution of actors involved, compliance information, reporting
suspicious activity, and other records and actions. In some cases, the metadata is more
important than the transaction.
Hence, it seems reasonable to infer that the manipulation of metadata could be as harmful as
counterfeiting currency or rewriting transaction history. Making no accommodation for actors
who want to voluntarily include these fields seems counterproductive to mainstream adoption
and consumer protection.",

"A purely peer-to-peer version of electronic cash would allow online
payments to be sent directly from one party to another without going through a
financial institution. Digital signatures provide part of the solution, but the main
benefits are lost if a trusted third party is still required to prevent double-spending.
We propose a solution to the double-spending problem using a peer-to-peer network.
The network timestamps transactions by hashing them into an ongoing chain of
hash-based proof-of-work, forming a record that cannot be changed without redoing
the proof-of-work. The longest chain not only serves as proof of the sequence of
events witnessed, but proof that it came from the largest pool of CPU power. As
long as a majority of CPU power is controlled by nodes that are not cooperating to
attack the network, they'll generate the longest chain and outpace attackers. The
network itself requires minimal structure. Messages are broadcast on a best effort
basis, and nodes can leave and rejoin the network at will, accepting the longest
proof-of-work chain as proof of what happened while they were gone.Commerce on the Internet has come to rely almost exclusively on financial institutions serving as
trusted third parties to process electronic payments. While the system works well enough for
most transactions, it still suffers from the inherent weaknesses of the trust based model.
Completely non-reversible transactions are not really possible, since financial institutions cannot
avoid mediating disputes. The cost of mediation increases transaction costs, limiting the
minimum practical transaction size and cutting off the possibility for small casual transactions,
and there is a broader cost in the loss of ability to make non-reversible payments for nonreversible
services. With the possibility of reversal, the need for trust spreads. Merchants must
be wary of their customers, hassling them for more information than they would otherwise need.
A certain percentage of fraud is accepted as unavoidable. These costs and payment uncertainties
can be avoided in person by using physical currency, but no mechanism exists to make payments
over a communications channel without a trusted party.
What is needed is an electronic payment system based on cryptographic proof instead of trust,
allowing any two willing parties to transact directly with each other without the need for a trusted
third party. Transactions that are computationally impractical to reverse would protect sellers
from fraud, and routine escrow mechanisms could easily be implemented to protect buyers. In
this paper, we propose a solution to the double-spending problem using a peer-to-peer distributed
timestamp server to generate computational proof of the chronological order of transactions. The
system is secure as long as honest nodes collectively control more CPU power than any
cooperating group of attacker nodes.",

"A major challenge for financial institutions is the
inherent inefficiencies of multiple ledgers within their systems. A
blockchain solution with multiple ledgers for multiple assets
provides a transformation approach to addressing this issue. We
present the all new Catapult blockchain solution platform based
on the original NEM technology and concepts. An open platform,
the solution is designed to bring down the cost of implementation
and ownership, and is a solution that will power the present and
future needs for blockchain driven solutions. The Catapult
solution is architected to allow for easy integration with most
applications, and therefore is agnostic to existing banking
standards. It allows for interoperability between blockchain
instances thereby permitting shareable and non-shareable data
to co-exist in a homogenous environment. This paper is
intentionally written to address a wide spectrum of readers. The NEM blockchain technology has been around for more than two years. Designed with mainstream applications in mind, it is the intent, therefore, that the NEM team should develop a solution based on what it can do in the most extensible manner. The focus of the NEM project has always been to unleash the power of the blockchain technology as a priority and quickly allow projects to build applications on top of this platform and realise the power of the blockchain technology.
We are of the opinion that blockchain technology is trying to find its place in the industry, but lacks uniformity in approach and standards. From what is available in the market space, one can immediately conclude that most blockchain initiatives revolve around the blockchain ledger, all with subtle variances on how the blockchain is run, and with slightly different flavours.
Our approach takes a different twist. Functionalities and features of a powerful blockchain are not our only emphasis. We have incorporated equally important elements that are hitherto subject to much neglect. These include:
1. allowing any solution to sit on it independently;
2. an abstraction layer with a full suite of APIs, allowing for ease of integration, and thereby harnessing the power of the blockchain ledger; and
3. scalability.
The purpose of this paper is to describe how NEM achieves this and how NEM as a solution, is a best of breed solution that not only serves a very important role as a blockchain technology but also sets a new standard for blockchain technology.",

"NEO has two native tokens, NEO (abbreviated symbol NEO) and NeoGas (abbreviated symbol GAS).
NEO, with a total of 100 million tokens, represents the right to manage the network. Management rights include voting for bookkeeping, NEO network parameter changes,
and so on. The minimum unit of NEO is 1 and tokens cannot be subdivided.
GAS is the fuel token for the realization of NEO network resource control, with a maximum total limit of 100 million. The NEO network charges for the operation and storage
of tokens and smart contracts, thereby creating economic incentives for bookkeepers and preventing the abuse of resources. The minimum unit of GAS is 0.00000001.
In the genesis block of the NEO network, 100 million NEOs are generated, GAS has not yet been generated. 100 million GAS, corresponding to the 100 million NEO, will be
generated through a decay algorithm in about 22 years time to address holding NEO. If NEO is transferred to a new address, the subsequent GAS generated will be credited
to the new address.
The NEO network will set a threshold by voting to exempt GAS from a certain amount of transfer transactions and smart contract operations to enhance the user
experience. When a large amount of spam transactions occur, NeoID can be used to prioritize transactions and smart contracts with qualified identities. Transactions and
smart contracts with no qualifying digital identities can get priority by paying GAS. NEO distribution:
NEO's 100 million tokens is divided into two portions. The first portion is 50 million tokens distributed proportionally to supporters of NEO during the crowdfunding. This
portion has been distributed.
The second portion is 50 million NEO managed by the NEO Council to support NEO's longterm
development, operation and maintenance and ecosystem. The NEO in this
portion has a lockout period of 1 year and is unlocked only after October 16, 2017. This portion will not enter the exchanges and is only for longterm
support of NEO
projects. The plans for it are as below:
GAS distribution:
GAS is generated with each new block. The initial total amount of GAS is zero. With the increasing rate of new block generation, the total limit of 100 million GAS will be
achieved in about 22 years. The interval between each block is about 1520
seconds, and 2 million blocks are generated in about one year.
Each year around 2 million blocks will be generated and the initial generation will be 8 GAS per block. There will be an annual reduction of 1 GAS per block, per year, to
coincide with the passing of every 2 million blocks. The reduction will continue down to just 1 GAS per block and will be held at that rate for around 22 years. After the 44
millionth block the total GAS generated will have reached 100 million and from this point there will be no further generation of GAS from new blocks.
According to this release curve, 16% of the GAS will be created in the first year, 52% of the GAS will be created in the first four years, and 80% of the GAS will be created
in the first 12 years. These GAS will be distributed proportionally in accordance with the NEO holding ratio, recorded in the corresponding addresses. NEO holders can
initiate a claim transaction at any time and claim these GAS tokens at their holding addresses.",

"This paper introduces a new model for consensus called federated Byzantine agreement (FBA). FBA achieves
robustness through quorum slices—individual trust decisions made by each node that together determine
system-level quorums. Slices bind the system together much the way individual networks’ peering and transit
decisions now unify the Internet.
We also present the Stellar Consensus Protocol (SCP), a construction for FBA. Like all Byzantine agreement
protocols, SCP makes no assumptions about the rational behavior of attackers. Unlike prior Byzantine
agreement models, which presuppose a unanimously accepted membership list, SCP enjoys open membership
that promotes organic network growth. Compared to decentralized proof of-work and proof-of-stake
schemes, SCP has modest computing and financial requirements, lowering the barrier to entry and potentially
opening up financial systems to new participants. Financial infrastructure is currently a mess of closed systems. Gaps between these
systems mean that transaction costs are high [Provost 2013] and money moves slowly
across political and geographic boundaries [Banning-Lover 2015; CGAP 2008]. This
friction has curtailed the growth of financial services, leaving billions of people underserved
financially [Demirguc-Kunt et al. 2015].
To solve these problems, we need financial infrastructure that supports the kind of
organic growth and innovation we’ve seen from the Internet, yet still ensures the integrity
of financial transactions. Historically, we have relied on high barriers to entry to
ensure integrity.We trust established financial institutions and do our best to regulate
them. But this exclusivity conflicts with the goal of organic growth. Growth demands
new, innovative participants, who may possess only modest financial and computing
resources.
We need a worldwide financial network open to anyone, so that new organizations
can join and extend financial access to unserved communities. The challenge for such
a network is ensuring participants record transactions correctly. With a low barrier
to entry, users won’t trust providers to police themselves. With worldwide reach,
providers won’t all trust a single entity to operate the network. A compelling alternative
is a decentralized system in which participants together ensure integrity by
agreeing on the validity of one another’s transactions. Such agreement hinges on a
mechanism for worldwide consensus.
This paper presents federated Byzantine agreement (FBA), a model suitable for
worldwide consensus. In FBA, each participant knows of others it considers important.
It waits for the vast majority of those others to agree on any transaction before
considering the transaction settled. In turn, those important participants do not agree
to the transaction until the participants they consider important agree as well, and so
on. Eventually, enough of the network accepts a transaction that it becomes infeasible
for an attacker to roll it back. Only then do any participants consider the transaction
settled. FBA’s consensus can ensure the integrity of a financial network. Its decentralized
control can spur organic growth.
This paper further presents the Stellar consensus protocol (SCP), a construction for
FBA. We prove that SCP’s safety is optimal for an asynchronous protocol, in that it
guarantees agreement under any node-failure scenario that admits such a guarantee. We also show that SCP is free from blocked states—in which consensus is no longer
possible—unless participant failures make it impossible to satisfy trust dependencies.
SCP is the first provably safe consensus mechanism to enjoy four key properties simultaneously:
— Decentralized control. Anyone is able to participate and no central authority
dictates whose approval is required for consensus.
— Low latency. In practice, nodes can reach consensus at timescales humans expect
for web or payment transactions—i.e., a few seconds at most.
— Flexible trust. Users have the freedom to trust any combination of parties they
see fit. For example, a small non-profit may play a key role in keeping much larger
institutions honest.
— Asymptotic security. Safety rests on digital signatures and hash families whose
parameters can realistically be tuned to protect against adversaries with unimaginably
vast computing power.
SCP has applications beyond financial markets for ensuring organizations perform
important functions honestly. An example is certificate authorities (CAs), who literally
hold the keys to the web. Experience shows that CAs sign incorrect certificates that get
used in the wild [Microsoft 2013; Langley 2015]. Several proposals address this problem
through certificate transparency [Kim et al. 2013; Laurie et al. 2013; Basin et al.
2014; Melara et al. 2014]. Certificate transparency allows users to examine the history
of certificates issued for any given entity and detect attempts by CAs to change an entity’s
public key without the endorsement of the previous key. SCP holds the potential
to strengthen the indelible certificate history at the core of certificate transparency.
Demanding global consensus on certificate history among a decentralized group of auditors
would make it harder to backpedal and override previously issued certificates.
The next section discusses previous approaches to consensus. Section 3 defines federated
Byzantine agreement (FBA) and lays out notions of safety and liveness applicable
in the FBA model. Section 4 discusses optimal failure resilience in an FBA
system, thereby establishing the security goals for SCP. Section 5 develops federated
voting, a key building block of the SCP protocol. Section 6 presents SCP itself, proving
safety and freedom from blocked states. Section 7 discusses limitations of SCP. Finally,
Section 8 summarizes results. For readers less familiar with mathematical notation,
Appendix A defines some symbols used throughout the paper.",

"The EOS.IO software introduces a new blockchain architecture designed to enable vertical and horizontal
scaling of decentralized applications. This is achieved by creating an operating system-like construct upon which
applications can be built. The software provides accounts, authentication, databases, asynchronous communication
and the scheduling of applications across hundreds of CPU cores or clusters. The resulting technology is a
blockchain architecture that scales to millions of transactions per second, eliminates user fees, and allows for quick
and easy deployment of decentralized applications. EOS.IO software utilizes the only decentralized consensus algorithm capable of meeting the performance
requirements of applications on the blockchain,D elegated Proof of Stake (DPOS.) Under this algorithm, those who
hold tokens on a blockchain adopting the EOS.IO software may select block producers through a continuous approval
voting system and anyone may choose to participate in block production and will be given an opportunity to produce
blocks proportional to the total votes they have received relative to all other producers. For private blockchains the
management could use the tokens to add and remove IT staff.
The EOS.IO software enables blocks to be produced exactly every 3 seconds and exactly one producer is authorized
to produce a block at any given point in time. If the block is not produced at the scheduled time then the block for
that time slot is skipped. When one or more blocks are skipped, there is a 6 or more second gap in the blockchain.
Using the EOS.IO software blocks are produced in rounds of 21. At the start of each round 21 unique block producers
are chosen. The top 20 by total approval are automatically chosen every round and the last producer is chosen
proportional to their number of votes relative to other producers. The selected producers are shuffled using a
pseudorandom number derived from the block time. This shuffling is done to ensure that all producers maintain
balanced connectivity to all other producers.
If a producer misses a block and has not produced any block within the last 24 hours they are removed from
consideration until they notify the blockchain of their intention to start producing blocks again. This ensures the
network operates smoothly by minimizing the number of blocks missed by not scheduling those who are proven to be
unreliable.
Under normal conditions a DPOS blockchain does not experience any forks because the block producers cooperate
to produce blocks rather than compete. In the event there is a fork, consensus will automatically switch to the
longest chain. This metric works because the rate at which blocks are added to a blockchain chain fork is directly
correlated to the percentage of block producers that share the same consensus. In other words, a blockchain fork
with more producers on it will grow in length faster than one with fewer producers. Furthermore, no block producer
should be producing blocks on two forks at the same time. If a block producer is caught doing this then such block
producer will likely be voted out. Cryptographic evidence of such double-production may also be used to
automatically remove abusers.",

"In this paper we analyze the mathematical foundations of IOTA, a cryp-
tocurrency for the Internet-of-Things (IoT) industry. The main feature of this
novel cryptocurrency is the tangle, a directed acyclic graph (DAG) for stor-
ing transactions. The tangle naturally succeeds the blockchain as its next
evolutionary step, and offers features that are required to establish a machine-
to-machine micropayment system.
An essential contribution of this paper is a family of Markov Chain Monte
Carlo (MCMC) algorithms. These algorithms select attachment sites on the
tangle for a transaction that has just arrived. The rise and success of Bitcoin during the last six years proved that blockchain technology
has real-world value. However, this technology also has a number of drawbacks
that prevent it from being used as a generic platform for cryptocurrencies across the
globe. One notable drawback is the concept of a transaction fee for transactions of
any value. The importance of micropayments will increase in the rapidly developing
IoT industry, and paying a fee that is larger than the amount of value being transferred
is not logical. Furthermore, it is not easy to get rid of fees in the blockchain
infrastructure since they serve as an incentive for the creators of blocks. This leads
to another issue with existing cryptocurrency technology, namely the heterogeneous
nature of the system. There are two distinct types of participants in the system, those
who issue transactions, and those who approve transactions. The design of this system
creates unavoidable discrimination of some patricipants, which in turn creates con
icts that make all elements spend resources on con
ict resolution. The aforementioned
issues justify a search for solutions essentially different from blockchain
technology, the basis for Bitcoin and many other cryptocurrencies.
In this paper we discuss an innovative approach that does not incorporate blockchain
technology. This approach is currently being implemented as a cryptocurrency called
iota [1], which was designed specifically for the IoT industry. The purpose of this
paper is to focus on general features of the tangle, and to discuss problems that arise
when one attempts to get rid of the blockchain and maintain a distributed ledger.
The concrete implementation of the iota protocol is not discussed.
In general, a tangle-based cryptocurrency works in the following way. Instead
of the global blockchain, there is a DAG that we call the tangle. The transactions
issued by nodes constitute the site set of the tangle graph, which is the ledger for
storing transactions. The edge set of the tangle is obtained in the following way:
when a new transaction arrives, it must approve two1 previous transactions. these
approvals are represented by directed edges, as shown in Figure 12. If there is not
a directed edge between transaction A and transaction B, but there is a directed
path of length at least two from A to B, we say that A indirectly approves B. There
is also the \"genesis\" transaction, which is approved either directly or indirectly by
all other transactions (Figure 2). The genesis is described in the following way. In
the beginning of the tangle, there was an address with a balance that contained all
of the tokens. The genesis transaction sent these tokens to several other \"founder\"
addresses. Let us stress that all of the tokens were created in the genesis transaction.
No tokens will be created in the future, and there will be no mining in the sense that
miners receive monetary rewards \"out of thin air\".
A quick note on terminology: sites are transactions represented on the tangle
graph. The network is composed of nodes; that is, nodes are entities that issue and
validate transactions.
The main idea of the tangle is the following: to issue a transaction, users must
work to approve other transactions. Therefore, users who issue a transaction are
contributing to the network's security. It is assumed that the nodes check if the
approved transactions are not con
icting. If a node finds that a transaction is in
conflict with the tangle history, the node will not approve the con
icting transaction
in either a direct or indirect manner3.",

"A crypto-currency based on Bitcoin, the work of Satoshi Nakamoto, with various
improvements such as a two-tier incentivized network, known as the Masternode network.
Included are other improvements such as PrivateSend, for increasing fungibility and
InstantSend which allows instant transaction confirmation without a centralized authority. Bitcoin [1] is a cryptocurrency that has emerged as a popular medium of exchange and is
the first digital currency that has attracted a substantial number of users [2]. Since its
inception in 2009, Bitcoin has been rapidly growing in mainstream adoption and merchant
usage [3]. A main issue with the acceptance of Bitcoin in point-of-sale(P OS) situations is
the time required to wait for the network to confirm the transaction made is valid,
alternatively payment companies have created methods to allow vendors to take zeroconfirmation
transactions, but these solutions utilize a trusted counterparty to mediate the
transaction outside of the protocol.
Bitcoin provides pseudonymous transactions in a public ledger, with a one-to-one
relationship between sender and receiver. This provides a permanent record of all
transactions that have ever taken place on the network [5]. Bitcoin is widely known in
academic circles to provide a low level of privacy, although with this limitation many people
still entrust their financial history to it’s blockchain.
Dash is the first privacy-centric cryptographic currency based on the work of Satoshi
Nakamoto. In this paper we propose a series of improvements to Bitcoin resulting in a
decentralized, strongly anonymous crypto-currency, with tamper-proof instant transactions
and a secondary peer-to-peer (P2P) network incentivized to provide services to the Dash
Network.",

"\"Bitcoin\" [1] has been a successful implementation of the concept of p2p electronic cash. Both
professionals and the general public have come to appreciate the convenient combination of
public transactions and proof-of-work as a trust model. Today, the user base of electronic cash
is growing at a steady pace; customers are attracted to low fees and the anonymity provided
by electronic cash and merchants value its predicted and decentralized emission. Bitcoin has
effectively proved that electronic cash can be as simple as paper money and as convenient as
credit cards.
Unfortunately, Bitcoin suffers from several deficiencies. For example, the system's distributed
nature is in
exible, preventing the implementation of new features until almost all of the net-
work users update their clients. Some critical 
aws that cannot be fixed rapidly deter Bitcoin's
widespread propagation. In such in
exible models, it is more efficient to roll-out a new project
rather than perpetually fix the original project.
In this paper, we study and propose solutions to the main deficiencies of Bitcoin. We believe
that a system taking into account the solutions we propose will lead to a healthy competition
among different electronic cash systems. We also propose our own electronic cash, \"CryptoNote\",
a name emphasizing the next breakthrough in electronic cash.",

"Through the use of many existing mature technologies, wave field (TRON), as a
new content platform, provides security, scalability, and privacy, and simultaneously
allows the participants to actively contribute to the processing capacity of their
machine to build a user registration network. It also gives positive contributors the
privilege to send advertisements to the whole network to incentivize (of course this
group text messaging will be limited in number). Centerless, but secure user registration, is implemented through the blockchain
mechanism, and the same mechanism has been applied in Bitcoin without the need for
central authorization, which avoids double spend difficulties. The blockchain ensures no duplicate registration, and the newly-registered users must obtain the confirmation
of multiple blocks before taking effect, i.e. notarization. Each block is defined as:
H (Blocki) provides Proof-of-Work to prove that the user received satisfying Nonce
value in Noncei space through violent solving; meanwhile occasional hash collision is
avoided through verification. The difficulty of solving is determined by the difficulty
value, and the number of blocks generated per hour is automatically set by the system,
which is similar to the Bitcoin network.
New user j must broadcast UserRegj when registering online, and after receiving the
broadcast message, other nodes must prove the proof-of-Work of H (UserRegj), which
will prevent denial of service attacks by false registration. This workload is much
smaller than the workload of the blockchain; typically, a few minutes of computation
can solve the problem.
The blockchain provides a mapping from the user name Usernamej to the user public
key PUBKj, a dictionary that can be publicly queried.
The node must verify the uniqueness of Usernamej before adding Usernamej to the
new block, but there is an exception: if the newly-registered key is signed by the
previously known public and private keys, then it may be replaced. In addition, the IDj
uniqueness and the proof-of-Work of UserRegj should be also proved when receiving
the new block.
Usernamej also has the maximum size and the allowable character limit to protect
the ID space from the hash attacks.
SpamMsgj is a broadcast message (called \"Promoted\" message) that sends the
Promoted message as a reward to nodes that actively participate in block generation.",

"The advent of the blockchain technology has introduced the world of decentralization and is challenging our preconceived perspectives of the current social, political, and economic systems, most notably, the central banking system. The rapid advancement of this technology has begun to blend world borders and statute, providing glimpses of an improved, alternative future. Yet, the technology is still at its infancy and is confronted with limitations in terms of performance, ease of use, and service quality.
Generally, the majority of blockchain projects place emphasis on their decentralization methodology and lack evidence of adoption in the real world due to their technological and business limitations. The ICON Project (“ICON”, “ICON Network”, “we”, “our”, “us”) aims to overcome such challenges and help advance our society towards true hyperconnectivity.
This paper outlines our vision and philosophy of the ICON Project and details on the supporting proprietary technologies that have been in development over the past few years. More importantly, we discuss actual implementation with dozens of reputable institutions that are already in the ICON Network. This demonstrates our progress beyond the initial concept stage and validates our team’s strong execution ability; a major factor that differentiates ICON from the majority of blockchain projects today.
ICON is inspired by Gilles Deleuze and Felix Guattari’s rhizome – “the world with no center point and the world where any point is a mere connection to other points.” ICON is a connector of disparate cryptocurrencies with different blockchain governances, and furthermore, a connector of the crypto world to our real world. ICON embraces the new and the unfamiliar, the principle of radical inclusion – accept new ideas and decisions made by the new republic established by ever-changing crypto-to-real world connections.",

"Bitcoin Gold is a community-led project to create an experimental
hard fork of Bitcoin to a new proof-of-work algorithm. The purpose for doing
this is to make Bitcoin mining decentralized again. Satoshi Nakamoto’s
idealistic vision of “one CPU one vote” has been superseded by a reality
where the manufacture and distribution of mining equipment has become
dominated by a very small number of entities, some of whom have engaged
in abusive practices against individual miners and the Bitcoin network as a
whole. Bitcoin Gold will provide an opportunity for countless new people
around the world to participate in the mining process with widely-available
consumer hardware that is manufactured and distributed by reputable
mainstream corporations. A more decentralized, democratic mining
infrastructure is more resilient and more in line with Satoshi’s original vision.
Perhaps, if the Bitcoin Gold experiment is judged by the community to be a
success, it may one day help build consensus for a proof-of-work hard fork
on Bitcoin itself. Bitcoin Gold is a community-led project to create an experimental
hard fork of Bitcoin to a new proof-of-work algorithm. The purpose for doing
this is to make Bitcoin mining decentralized again. Satoshi Nakamoto’s
idealistic vision of “one CPU one vote” has been superseded by a reality
where the manufacture and distribution of mining equipment has become
dominated by a very small number of entities, some of whom have engaged
in abusive practices against individual miners and the Bitcoin network as a
whole. Bitcoin Gold will provide an opportunity for countless new people
around the world to participate in the mining process with widely-available
consumer hardware that is manufactured and distributed by reputable
mainstream corporations. A more decentralized, democratic mining
infrastructure is more resilient and more in line with Satoshi’s original vision.
Perhaps, if the Bitcoin Gold experiment is judged by the community to be a
success, it may one day help build consensus for a proof-of-work hard fork
on Bitcoin itself.",

"Blockchain-enabled smart contracts that employ proof-ofstake
validation for transactions, promise significant performance advantages
compared to proof-of-work solutions. For broad industry adoption,
other important requirements must be met in addition. For example,
stable backwards-compatible smart-contract systems must automate
cross-organizational information-logistics orchestration with lite mobile
wallets that support simple payment verification (SPV) techniques. The
currently leading smart-contract solution Ethereum, uses computationally
expensive proof-of-work validation, is expected to hard-fork multiple
times in the future and requires downloading the entire blockchain. Consequently,
Ethereum smart contracts have limited utility and lack formal
semantics, which is a security issue. This whitepaper fills the gap in the
state of the art by presenting the Qtum smart-contract framework that
aims for sociotechnical application suitability, the adoption of formalsemantics
language expressiveness, and the provision of smart-contract
template libraries for rapid best-practice industry deployment. We discuss
the Qtum utility advantages compared to the Ethereum alternative
and present Qtum smart-contract future development plans for industrycases
applications. Orchestration and choreography protocols that facilitate, verify and enact with
computing means a negotiated agreement between consenting parties, are termed
smart contracts. The latter initially find application in diverse domains such as,
e.g., financial-technology [6], Internet-of-Things (IoT) applications [33], digital-
signing solutions [11]. An essential aspect of smart contracts is a decentralized
validation of transactions, initially by means of so-called proof-of-work (PoW)
[42]. The core technology that enables smart contracts is a public distributed
ledger termed the blockchain, which records transaction events without requiring ing a trusted central authority. Blockchain technology spreads in popularity with
the inception of Bitcoin [23], a peer-to-peer (P2P) cryptocurrency and payment
system that comprises a limited set of operations on the protocol layer. Bit-
coins use PoW for transaction validation that is computationally expensive and
electricity intensive.
In contrast to Bitcoins, many smart-contract systems are equipped with the
Turing-complete language Solidity1 that resembles JavaScript syntax and targets
for enactment, e.g., the Ethereum Virtual [44] machine. Ethereum is the de-
facto leading smart-contract system despite being plagued by several deficiencies.
First, proof-of-work transaction validation diminishes scalability to the point
where Ethereum is considered to not be feasible for most industry applications.
Second, in a recent crowdfunding casestudy, the Ethereum affiliated Solidity
smart contract was hacked2 because of security 
aws resulting from a lack in
the state of the art with respect to tools for formal verifications [3]. The security

aw resulted in a loss of ca. $50 million. Consequently, Ethereum performed a
hardfork resulting in a schism yielding two separate Ethereum versions3. Yet
another Ethereum hardfork4 was caused by a denial of service attack, and more
hardforks must be expected5 for realizing proof-of-stake [2] transaction validation
and blockchain sharding [20].
More reasons limit widespread Ethereum industry adoption [8]. For exam-
ple, an inability to automate cross-organizational information-logistics, lacking
privacy protecting differentiations between external- versus related internal pri-
vate contracts, secure and stable virtual machines for blockchains with better
performing proof-of-stake [2] transaction validation, formally verifiable smart-
contract languages, lite wallets that do not require downloading the entire
blockchain, and mobile-device solutions for smart contracts with simple pay-
ment verification (SPV) [14]. The latter means that clients merely download
block headers when they connect to an arbitrary full node [23].
While Qtum uses the Ethereum Virtual Machine (EVM) for a current lack
of more suitable alternatives, according to [19], the EVM has deficiencies such
as earlier experienced attacks against mishandled exceptions and against de-
pendencies such as for transaction-ordering, timestamps, and so on. It is also
desirable for a smart-contract system to achieve industry-scalability with em-
ploying sidechains [10] and unspent transaction outputs (UTXO) [10], achieving
compatibility to other blockchain systems such as Bitcoins [23], or Colored coins
[36]. Furthermore, an adoption of features from the Bitcoin Lightning Network
[35] yields scalability via bidirectional micropayment channels.",

"Ethereum is an open blockchain platform that lets anyone build and use decentralized applications that run on
blockchain technology. Like Bitcoin, no one controls or owns Ethereum – it is an open-source project built by
many people around the world. But unlike the Bitcoin protocol, Ethereum was designed to be adaptable and
flexible. It is easy to create new applications on the Ethereum platform, and with the Homestead release, it is now
safe for anyone to use those applications. Blockchain technology is the technological basis of Bitcoin, first described by its mysterious author Satoshi
Nakamoto in his white paper “Bitcoin: A Peer-to-Peer Electronic Cash System”, published in 2008. While the use
of blockchains for more general uses was already discussed in the original paper, it was not until a few years later
that blockchain technology emerged as a generic term. A blockchain is a distributed computing architecture where
every network node executes and records the same transactions, which are grouped into blocks. Only one block
can be added at a time, and every block contains a mathematical proof that verifies that it follows in sequence
from the previous block. In this way, the blockchain’s “distributed database” is kept in consensus across the whole
network. Individual user interactions with the ledger (transactions) are secured by strong cryptography. Nodes
that maintain and verify the network are incentivized by mathematically enforced economic incentives coded into
the protocol.
In Bitcoin’s case the distributed database is conceived of as a table of account balances, a ledger, and transactions
are transfers of the bitcoin token to facilitate trustless finance between individuals. But as bitcoin began attracting
greater attention from developers and technologists, novel projects began to use the bitcoin network for purposes
other than transfers of value tokens. Many of these took the form of “alt coins” - separate blockchains with
cryptocurrencies of their own which improved on the original bitcoin protocol to add new features or capabilities.
In late 2013, Ethereum’s inventor Vitalik Buterin proposed that a single blockchain with the capability to be
reprogrammed to perform any arbitrarily complex computation could subsume these many other projects.
In 2014, Ethereum founders Vitalik Buterin, Gavin Wood and Jeffrey Wilcke began work on a next-generation
blockchain that had the ambitions to implement a general, fully trustless smart contract platform. Ethereum is a programmable blockchain. Rather than give users a set of pre-defined operations (e.g. bitcoin
transactions), Ethereum allows users to create their own operations of any complexity they wish. In this way, it
serves as a platform for many different types of decentralized blockchain applications, including but not limited
to cryptocurrencies. Ethereum in the narrow sense refers to a suite of protocols that define a platform for decentralised applications.
At the heart of it is the Ethereum Virtual Machine (“EVM”), which can execute code of arbitrary algorithmic
complexity. In computer science terms, Ethereum is “Turing complete”. Developers can create applications
that run on the EVM using friendly programming languages modelled on existing languages like JavaScript and
Python.
Like any blockchain, Ethereum also includes a peer-to-peer network protocol. The Ethereum blockchain database
is maintained and updated by many nodes connected to the network. Each and every node of the network runs
the EVM and executes the same instructions. For this reason, Ethereum is sometimes described evocatively as a
“world computer”.
This massive parallelisation of computing across the entire Ethereum network is not done to make computation
more efficient. In fact, this process makes computation on Ethereum far slower and more expensive than on a
traditional “computer”. Rather, every Ethereum node runs the EVM in order to maintain consensus across the
blockchain. Decentralized consensus gives Ethereum extreme levels of fault tolerance, ensures zero downtime,
and makes data stored on the blockchain forever unchangeable and censorship-resistant.
The Ethereum platform itself is featureless or value-agnostic. Similar to programming languages, it is up to entrepreneurs
and developers to decide what it should be used for. However, it is clear that certain application types
benefit more than others from Ethereum’s capabilities. Specifically, ethereum is suited for applications that
automate direct interaction between peers or facilitate coordinated group action across a network. For instance,
applications for coordinating peer-to-peer marketplaces, or the automation of complex financial contracts.
Bitcoin allows for individuals to exchange cash without involving any middlemen like financial institutions, banks,
or governments. Ethereum’s impact may be more far-reaching. In theory, financial interactions or exchanges of
any complexity could be carried out automatically and reliably using code running on Ethereum. Beyond financial
applications, any environments where trust, security, and permanence are important – for instance, asset-registries,
voting, governance, and the internet of things – could be massively impacted by the Ethereum platform.",

"Lisk is a next generation platform that allows for the development and distribution of JavaScript based decentralized
applications using an easy to use, fully featured ecosystem. Through Lisk, developers can build, publish, distribute,
and monetize their applications within a custom built cryptocurrency powered system that utilizes custom
blockchains, smart contracts, cloud storage, and computing nodes; all from within one industry solution. Lisk is written in Node.js[1] on the backend, and HTML5 and CSS3 on the frontend. It works asynchronously and
allows for fast processing of all functions such as network transactions. The database uses SQLite to allow the use
and running of complex queries. Lisk is the first decentralized application solution written entirely in Node.js. This opens up the Lisk ecosystem to
thousands of current developers with no additional skills necessary. Any web developer who is already familiar with
JavaScript and Node.js can immediately jump in and begin building decentralized applications from day one.
Our core goal with Lisk was to create an entire plug and play system that would allow developers to do everything
from design, development, publication, and monetization, all from within one platform. By utilizing the Lisk
ecosystem, developers can quickly deploy their JavaScript apps to Lisk Hosting & Storage Nodes, gain listing in the
Lisk Dapp Store, and have immediate access to Lisk Compute Nodes for execution of the code. All while being
backed by the integrity and security of the Lisk sidechain consensus functionality.
To top it all off, all of these cloud functions are run by the users and Lisk delegates who are paid through a built in
invoice system (or by the network itself in the case of delegates) and paid in LISK (Lisk’s own cryptocurrency) or
BTC. It truly is a one stop shop for application development that provides a cutting edge, affordable, and forwardthinking
solution.",

"Distributed ledgers have been around for several years as of the time of this writing
yet adoption of the platforms has been low and initial adopter markets have failed
to materialize. The transaction performance of these systems compared to
centralized system is significantly worse relegating them to niche markets that can
only capitalize on the benefit of decentralization while tolerating slow speed.
RaiBlocks is designed to be a scalable and efficient distributed ledger platform. The
design makes several significant improvements over alternatives giving a simple
system that can process transactions in seconds making it a useful in a digital
world.
To get these performance improvements we apply a critical optimization borrowed
from concurrent computing where we replace shared state with message passing.
This eliminates shared state contention greatly improving global throughput and
lowering transaction time.
RaiBlocks builds on an analogy from the electrical engineering discipline by
equating network consensus to arbiters circuits. This gives RaiBlocks an
established and well researched modeling basis for how the system comes to a
distributed, egalitarian, and efficient conclusion.",

"The Blockchain technology is experiencing rapid development especially in recent one or two years. The change is so fast for us entrepreneur. Despite the direction is technology development and expansion, or application research, we face changes all the time. Every time we site together, discuss and conclude \"the only thing that does not change is change itself\", just like a poet. From the second half of 2015, with an article from The Economist “Blockchain: The Trust Machine”, the Blockchain technology started to walk out of the geek community and rapidly gained worldwide attention in various industries.
The term \“Blockchain\" is no longer an obscure technical term for many people. Lots of the new ideas and projects are coming out, which includes many imaginative models and new directions for Blockchain. At the end of last year, the Blockchain technology was even written directly into the national \"13th Five-Year plan\", which encouraged us many peers. In addition, it attracts so many aspiring young people to join the Blockchain industry.
Needless to say, Blockchain has been recognized by the world as a new generation of powerful technology. Blockchain is considered as being able to change the world again just like what the Internet technology did. In addition, based on the pattern of human technology development, the development process of the Blockchain technology will suddenly get speeds up by a huge margin without doubt. We believe that it will have substantial breakthroughs and extensive expansion in the upcoming few years for the Blockchain industry.
However, the reality is tougher than expected. The application direction of Blockchain is either for financial industry or non-financial industry. For financial industry, it is so obvious with its high standard of compliance, so it is very hard to make a break through. For non-financial industry, it has a variety of collaborative cooperation modes but all these participants lack of drive to move further. That is why even though there is some new concepts derived from Blockchain, only few practical Blockchain business application has been established. Even when some project get partially established can make the teams feel excited.
Although everything is hard at the beginning, there is always someone who is very careful and willing to be the first one to get into the field. In order to reduce the possibility of failure as much as possible, we want to share VeChain with the investors, enterprise customers, cooperative partners and colleagues – a product that we started making strategic plan two years ago.",

"OmiseGO is building a decentralized exchange, liquidity provider mechanism, clear-
inghouse messaging network, and asset-backed blockchain gateway. OmiseGO is not
owned by any single one party. Instead, it is an open distributed network of validators
which enforce behavior of all participants. It uses the mechanism of a protocol token
to create a proof-of-stake blockchain to enable enforcement of market activity amongst
participants. This high-performant distributed network enforces exchange across as-
set classes, from fiat-backed issuers to fully decentralized blockchain tokens (ERC-20
style and native cryptocurrencies). Unlike nearly all other decentralized exchange plat-
forms, this allows for decentralized exchange of other blockchains and between multiple
blockchains directly without a trusted gateway token. Markets may be able to signifi-
cantly reduce spreads and encourage market assurance via decentralizing custody and
increased transparency of market activity. This is achieved using smart contracts, proto-
col tokens enforcing correct market behavior of orderbook matching, a new construction
of Ethereum bonded external enforcement of clearinghouse activity, and commitments
to historical exchange data for use with Ethereum smart contracts. The primary role of blockchains are to solve coordination problems among multilateral
agreements between a network of participants. By ensuring transparency, assurance, and
enforcement, we can enable multilateral agreements where they were not previously possible.
When all parties are assured that the operations are not only transparent, but also the
mechanisms are guaranteed to not change without significant effort, parties are more willing
to coordinate. Participants have significantly higher guarantees that a single party has
difficulty forcing other parties in the future into usurious rent extraction via a change in
business processes or information asymmetry. In other words, any single participant is more
willing to use systems where the business processes and mechanisms itself are not owned
by any other single participant.
There is a fundamental coordination problem amongst payment processors, gateways,
and financial institutions. For instance, a customer of a bank wishes to pay a merchant on another network. Traditionally, there have been significant efforts in engineering around
payment systems which are compatible across payment networks and financial institutions.
These are usually constructed by creating a clearinghouse which manages the interchange,
usually via a messaging network with either a central counterparty clearinghouse or nos-
tro/vostro accounts. Examples include FedWire, CHIPS, SWIFT, consumer card payment
networks, NSCC/DTCC, OCC, and ACH. These networks service different roles and func-
tions, including local/national payments, international payments, credit, equities/asset ex-
change, and derivatives. These centralized networks allow for the controlling entity to
arbitrarily change the mechanisms, which result in significant amount of transaction costs
via information costs, due diligence, and contractual enforcement between all parties.
We believe that there is currently a large emerging market of disruption in digital pay-
ments with new payment platforms (e.g. Venmo, Alipay, etc.). These networks have signifi-
cant aversion to interchange across networks, as it usually requires significant overhead costs
in trust with the interchange facility. Parties are unwilling to use central counterparties, as
neither party wishes to defer to the other, and use of nostro/vostro accounts require bespoke
contracts between participants. While the larger networks have significant incentive around
protection of their network effects, we believe that there is a long-tail of entities wishing
to provide eWallet services which require greater coordination amongst multilateral partic-
ipants. These mid-size participants will be able to cross value across networks in order to
reach sufficient network effects in usability. The infrastructure and reference frontend for
these providers will allow for the network effects to be encoded into this network, allowing
for emerging eWallet participants to instantly create high network utility.
Blockchains allows society to externalize the world's business processes from single cen-
tralized corporations into open, decentralized computing networks. [1][2] OmiseGO (OMG)
is a network which decentralizes market liquidity, orderbook matching and execution, clear-
inghouse custodianship, and high-scalability payments to help resolve payments across these
emerging eWallet payment networks.
By shifting these business processes traditionally placed into a single corporation, it
is possible to provide eWallet providers an entire interchange process in a decentralized
high-performant open network.",

"Small and medium sized enterprises (SMEs) are always in need of short-term financing
especially when there is a sudden and immediate need for increased working capital to
fund wages or the purchase of raw materials. They will very often take out short-term
loans from their bank which is not the ideal solution and the short-term finance industry
is dominated by banks and other lending institutions such as the traditional invoice
finance companies. However, newer and more innovative P2P (peer-to-peer) invoice
finance platforms have recently entered the industry.
These P2P invoice financing platforms operates in the same manner as the traditional
invoice financing companies by providing short term liquidity on invoices for short
durations of up to 90 days. Rather than waiting for their customers to settle invoices that
have due dates of 45 to 90 days, the invoices can be sold to invoice financing companies
to access “immediate” funds. P2P platforms are unique in that they connect invoice
sellers directly with invoice buyers making the rise of P2P as an alternative lending
platform more attractive to businesses globally.
The global invoice financing market was valued $3 Trillion in 2013 and due to a
slow-down in the world economy the invoice financing market experienced a slight
contraction to approximately $2.6 Trillion in 2016. The business environment has
become more challenging and making it a more favorable environment for new fintech
start-up like Populous.
However, to operate in this industry without a deep understanding of credit and
underwriting principle can result in serious financial loss for the company as well as
investors. Our in-depth knowledge and expertise in the short-term finance industry
allows us to build a P2P invoice financing platform using credit scoring and bankruptcy
formula such as the Altman Z-score. We will also identify potential borrowers using
K-means cluster analysis.
When these formulas are combined with the XBRL data set we can perform “enhanced”
credit risk analysis on targeted potential borrowers, linked companies and their
customers. Using Blockchain technology we can leverage smart contract to create a cost
effective and efficient solution by providing a streamlined funding solution to
businesses. Blockchain technology also affords some security against fraud and can
prevent duplication in the selling of invoices.",

"Bitcoin is the first digital currency to see widespread adoption. Although payments are
conducted between pseudonyms, Bitcoin cannot offer strong privacy guarantees: payment
transactions are recorded in a public decentralized ledger, from which much information can
be deduced. Zerocoin (Miers et al., IEEE S&P 2013) tackles some of these privacy issues by
unlinking transactions from the payment's origin. Yet it still reveals payment destinations and
amounts, and is limited in functionality.
In this paper, we construct a full-
edged ledger-based digital currency with strong privacy
guarantees. Our results leverage recent advances in zero-knowledge Succinct Non-interactive
ARguments of Knowledge (zk-SNARKs).
We formulate and construct decentralized anonymous payment schemes (DAP schemes). A
DAP scheme lets users pay each other directly and privately: the corresponding transaction
hides the payment's origin, destination, and amount. We provide formal definitions and proofs
of the construction's security.
We then build Zerocash, a practical instantiation of our DAP scheme construction. In
Zerocash, transactions are less than 1 kB and take under 6 ms to verify | orders of magnitude
more efficient than the less-anonymous Zerocoin and competitive with plain Bitcoin.",

"Bitcoin was developed and released in 2009 in response to an inherent flaw in the way
transactions were processed on the Internet. In his whitepaper, Nakamoto explains that
?Commerce on the Internet has come to rely almost exclusively on financial institutions serving as
trusted third parties to process electronic payments.While the system works well enough for most
transactions, it still suffers from the inherent weaknesses of the trust based model?[1]. Since its
original inception in 2009, Bitcoin has been rapidly adopted into today?s modern marketplaces. A
primary issue with Bitcoin?s rapid adoption is the increase of demand on the original blockchain to
handle varying degrees of large transactions.With increased demand comes increased
transactional waiting periods, and this has resulted in higher transactional fees in attempts to try
and speed-up transaction confirmation times.
The core innovation behind Bitcoin is its decentralized structure. Unlike traditional fiat
currencies, Bitcoin has no central control, no central repository of information, no central
management, and no central point of failure. However, one of the challenges facing Bitcoin is that
most of the actual e-services and e-businesses built around the Bitcoin ecosystem are centralized.
Due to the centralized nature of the current system, e-commerce is ran by individuals in specific
locations that utilize vulnerable computer systems, that are susceptible to legal entanglements.
Verge is one of the truly decentralized currencies available today due to its standing commitment
to building off of the core fundamentals of Bitcoin, while bringing an entirely new layer of anonymity
to realization.",

"In our view, there are fundamentally two different types of exchanges: the ones that
deal with fiat currency; and the ones that deal purely in crypto. It is the latter one that
we will focus on. Even though they are small now, we strongly believe that pure
crypto exchanges will be bigger, many times bigger, than fiat based exchanges in the
near future. They will play an ever more important role in world finance and we call
this new paradigm Binance ; Binary Finance.
With your help, Binance will build a world-class crypto exchange, powering the future
of crypto finance.",

"A digital token backed by fiat currency provides individuals and organizations with a
robust and decentralized method of exchanging value while using a familiar accounting unit. The
innovation of blockchains is an auditable and cryptographically secured global ledger. Assetbacked
token issuers and other market participants can take advantage of blockchain technology, along
with embedded consensus systems, to transact in familiar, less volatile currencies and assets. In
order to maintain accountability and to ensure stability in exchange price, we propose a method to
maintain a onetoone
reserve ratio between a cryptocurrency token, called tethers, and its
associated realworld
asset, fiat currency. This method uses the Bitcoin blockchain, Proof of
Reserves, and other audit methods to prove that issued tokens are fully backed and reserved at all
times.",

"Blockchain or Distributed Ledger Technology (DLT) offers a radically different paradigm of storing and managing information online. Decentralised ledgers lack the points of failure and associated security issues of traditional databases and top-down protocols, whilst at the same time posing their own unique challenges for effective deployment and maintenance.
The advantages in terms of costs, transparency, immutability, security and confidence that are characteristic of blockchain solutions mean that financial businesses, government departments and other organisations are exploring applications of all kinds with a view to delivering services more profitably and efficiently. However, reliable deployment of a new blockchain fit for purpose entails extensive overheads in terms of network infrastructure, development, security and ongoing maintenance. Moreover, use of an existing blockchain (such as Bitcoin) comes with numerous problems for a mainstream business, not least because users have no control over blockchain features or future development.
An attractive model for blockchain service provision exists in cloud computing. Cloud services may be tailored according to the needs of the organisation and infrastructure, platforms and software provided as services via web interfaces - without businesses having to take on the maintenance of these themselves.
Stratis will take a similar approach to blockchain deployment, enabling organisations to provision their own private blockchains, tailored to their precise needs but secured on the parent Stratis chain. This approach means there are few unnecessary overheads whilst allowing businesses to secure the benefits of a blockchain-based solution, developing services via powerful APIs and lite web-based clients.",

"The authors introduce Sia, a platform for decentral-
ized storage. Sia enables the formation of storage con-
tracts between peers. Contracts are agreements be-
tween a storage provider and their client, defining
what data will be stored and at what price. They
require the storage provider to prove, at regular in-
tervals, that they are still storing their client's data.
Contracts are stored in a blockchain, making them
publicly auditable. In this respect, Sia can be viewed
as a Bitcoin derivative that includes support for such
contracts. Sia will initially be implemented as an alt-
coin, and later financially connected to Bitcoin via a
two-way peg. Sia is a decentralized cloud storage platform that in-
tends to compete with existing storage solutions, at
both the P2P and enterprise level. Instead of renting
storage from a centralized provider, peers on Sia rent
storage from each other. Sia itself stores only the stor-
age contracts formed between parties, defining the
terms of their arrangement. A blockchain, similar to
Bitcoin [1, 12], is used for this purpose.
By forming a contract, a storage provider (also
known as a host) agrees to store a client's data, and
to periodically submit proof of their continued stor-
age until the contract expires. The host is compen-
sated for every proof they submit, and penalized for
missing a proof. Since these proofs are publicly veri-
fiable (and are publicly available in the blockchain),
network consensus can be used to automatically en-
force storage contracts. Importantly, this means that
clients do not need to personally verify storage proofs;
they can simply upload their file and let the network
do the rest.
We acknowledge that storing data on a single un-
trusted host guarantees little in the way of availabil-
ity, bandwidth, or general quality of service. Instead,
we recommend storing data redundantly across mul-
tiple hosts. In particular, the use of erasure codes
can enable high availability without excessive redun-
dancy.
Sia will initially be implemented as a blockchain-
based altcoin. Future support for a two-way peg
with Bitcoin is planned, as discussed in \"Enabling
Blockchain Innovations with Pegged Sidechains\" [5].
The Sia protocol largely resembles Bitcoin except for
the changes noted below.",

"\"Bitcoin\" [1] has been a successful implementation of the concept of p2p electronic cash. Both
professionals and the general public have come to appreciate the convenient combination of
public transactions and proof-of-work as a trust model. Today, the user base of electronic cash
is growing at a steady pace; customers are attracted to low fees and the anonymity provided
by electronic cash and merchants value its predicted and decentralized emission. Bitcoin has
effectively proved that electronic cash can be as simple as paper money and as convenient as
credit cards.
Unfortunately, Bitcoin suffers from several deficiencies. For example, the system's distributed
nature is in
exible, preventing the implementation of new features until almost all of the net-
work users update their clients. Some critical 
aws that cannot be fixed rapidly deter Bitcoin's
widespread propagation. In such in
exible models, it is more efficient to roll-out a new project
rather than perpetually fix the original project.
In this paper, we study and propose solutions to the main deficiencies of Bitcoin. We believe
that a system taking into account the solutions we propose will lead to a healthy competition
among different electronic cash systems. We also propose our own electronic cash, \"CryptoNote\",
a name emphasizing the next breakthrough in electronic cash.");
	
	$ind = "";
	
	for($i = 0; $i < strlen($id); $i++){
		
		if(is_numeric($id[$i])){
			$ind += $id[$i];
		}	
	}
	
	$ind = (int) $ind;
	
	echo $arr[$ind-1];

?>